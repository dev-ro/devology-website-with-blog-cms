<?php

namespace Modules\Admin\Datagrids;
use Illuminate\Support\Facades\DB;

class TeamsDataGrid extends DataGrid {


    protected $table = 'teams';
    protected $title = 'Teams';
    protected $index = 'id';
    protected $itemsPerPage = 5;
    protected $sortOrder = 'DESC';
    protected $enableMassAction = true;
    protected $enableAction = true;
    protected $HumanizeDateTime = true;
    protected $paginate = true;

    public function __construct()
    {
        parent::__construct();
    }


    public function prepQuery()
    {
        $queryBuilder = DB::table($this->table)->select(
            'id',
            'team_name',
            'designation',
            'created_at',
            'image' ,
            'updated_at',
        );
        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {

        $this->addColumn([
            'index' => 'image',
            'label' => 'Image',
            'type' => 'image'
        ]);

        $this->addColumn([
            'index' => 'team_name',
            'label' => 'Team Name',
            'type' => 'string',
        ]);

        $this->addColumn([
            'index' => 'designation',
            'label' => 'Designation',
            'type' => 'string'
        ]);

        $this->addColumn([
            'index' => 'created_at',
            'label' => 'C.at',
            'type' => 'datetime'
        ]);
        
        $this->addColumn([
            'index' => 'updated_at',
            'label' => 'U.at',
            'type' => 'datetime'
        ]);
    }

    public function prepareMassAction()
    {
        $this->addMassAction([
            'type'      => 'Delete',
            'lable'     => 'Bulk Delete',
            'action'    => route('teams-mass-destroy'),
            'method' => 'DELETE' 
        ]);
    }


    public function prepareAction()
    {
        // Edit Testimonail
        $this->addAction([
            'title' => 'Edit',
            'method' => 'GET',
            'route' => 'teams-edit',
            'icon' => 'fas fa-pencil-alt',
            
        ]);

        // Delete Testimonial
        $this->addAction([
            'title' => 'Delete',
            'method' => 'DELETE',
            'route' => 'teams-delete',
            'icon' => 'far fa-trash-alt'
        ]);
    }

}