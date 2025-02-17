<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class InvoicesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->rawColumns(['id','name', 'order'])
            ->editColumn('name', function () {
                return ucwords('Gabrielle Veron');
            })
            ->editColumn('order', function () {
                return ucwords('#10000370');
            })
            ->editColumn('code', function () {
                return ucwords('INV-126');
            })
            ->editColumn('amount', function () {
                return ucwords('$11.99');
            })
            ->editColumn('status', function () {
                return 'Pending';
            })
            ->editColumn('created_at', function () {
                return '22-10-2024 06:06:52';
            })
            ->addColumn('action', function (User $invoice) {
                return view('pages/apps.e-commerce.invoices.columns._actions', compact('invoice'));
            })
            ->setRowId('id');
    }


    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('invoices-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('rt' . "<'row'<'col-sm-12'tr>><'d-flex justify-content-between'<'col-sm-12 col-md-5'i><'d-flex justify-content-between'p>>",)
            ->addTableClass('table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold')
            ->setTableHeadClass('text-start text-muted fw-bold fs-7 text-uppercase gs-0')
            ->drawCallback("function() {" . file_get_contents(resource_path('views/pages/apps/e-commerce/invoices/columns/_draw-scripts.js')) . "}");
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->addClass('text-start'),
            Column::make('name'),
            Column::make('order'),
            Column::make('code'),
            Column::make('amount')->addClass('text-start'),
            Column::make('created_at')->title('Created At'),
            Column::make('status')->title('Status'),
            Column::computed('action')->title('Operations')
                ->addClass('text-end text-nowrap')
                ->exportable(false)
                ->printable(false)
                ->width(60)
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Invoices_' . date('YmdHis');
    }
}
