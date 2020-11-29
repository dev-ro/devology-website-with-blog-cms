<?php
namespace Modules\Admin\Datagrids;
use Illuminate\Support\Facades\DB;

class ServicesDataGrid extends DataGrid {

    protected $title = "Services";
    protected $table = "services";
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
            'name',
            'image',
            'featured',
            'show_footer_menu',
            'created_at',
            'updated_at'
        );

        $this->setQueryBuilder($buildquery);
        
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'name',
            'label' => 'Name',
            'type' => 'string' 
        ]);

        $this->addColumn([
            'index' => 'image',
            'label' => 'Image',
            'type' => 'image'
        ]);

        $this->addColumn([
            'index' => 'featured',
            'label' => 'Featured',
            'type' => 'bool'
        ]);

        $this->addColumn([
            'index' => 'show_footer_menu',
            'label' => 'In Footer Menu',
            'type' => 'bool'
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
            'action'    => route('services-mass-destroy'),
            'method' => 'DELETE' 
        ]);
    }


    public function prepareAction()
    {
        // Edit Testimonail
        $this->addAction([
            'title' => 'Edit',
            'method' => 'GET',
            'route' => 'services-edit',
            'icon' => 'fas fa-pencil-alt',
            
        ]);

        // Delete Testimonial
        $this->addAction([
            'title' => 'Delete',
            'method' => 'DELETE',
            'route' => 'services-delete',
            'icon' => 'far fa-trash-alt'
        ]);
    }

}
