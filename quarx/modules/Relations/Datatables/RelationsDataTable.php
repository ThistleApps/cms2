<?php

namespace Quarx\Modules\Relations\DataTables;

use Quarx\Modules\Relations\Models\Relation;
use Form;
use Yajra\Datatables\Services\DataTable;

class RelationsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'relations.relations.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $relations = Relation::query();

        return $this->applyScopes($relations);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'name' => ['name' => 'name', 'data' => 'name'],
            'slug' => ['name' => 'slug', 'data' => 'slug'],
            'relationtype_id' => ['name' => 'relationtype_id', 'data' => 'relationtype_id'],
            'slaplanid' => ['name' => 'slaplanid', 'data' => 'slaplanid'],
            'slaexpirytimeline' => ['name' => 'slaexpirytimeline', 'data' => 'slaexpirytimeline']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'relations';
    }
}
