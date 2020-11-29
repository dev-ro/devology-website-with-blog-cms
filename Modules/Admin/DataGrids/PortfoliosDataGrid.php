<?php
namespace Modules\Admin\Datagrids;
use Illuminate\Support\Facades\DB;

class PortfoliosDataGrid extends DataGrid {

    protected $title = "Portfolios";
    protected $table = "portfolios";
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
        $buildquery = DB::table($this->table)->select(
            'id',
            'title',
            'image',
            'created_at',
            'updated_at'
        );

        $this->setQueryBuilder($buildquery);
        
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'title',
            'label' => 'Title',
            'type' => 'string' 
        ]);

        $this->addColumn([
            'index' => 'image',
            'label' => 'Image',
            'type' => 'image'
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
            'action'    => route('portfolios-mass-destroy'),
            'method' => 'DELETE' 
        ]);
    }


    public function prepareAction()
    {
        // Edit Testimonail
        $this->addAction([
            'title' => 'Edit',
            'method' => 'GET',
            'route' => 'portfolio-edit',
            'icon' => 'fas fa-pencil-alt',
            
        ]);

        // Delete Testimonial
        $this->addAction([
            'title' => 'Delete',
            'method' => 'DELETE',
            'route' => 'portfolio-delete',
            'icon' => 'far fa-trash-alt'
        ]);
    }

}
