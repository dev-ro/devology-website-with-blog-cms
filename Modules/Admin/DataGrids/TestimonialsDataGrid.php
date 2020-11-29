<?php

namespace Modules\Admin\Datagrids;
use Illuminate\Support\Facades\DB;
class TestimonialsDataGrid extends DataGrid {

    /**
     * Title for page 
     */
    protected $title = 'Testimonials';

    /**
     * items per page for pagination
     *
     * @var integer
     */
    protected $itemsPerPage = 10;

    /**
     * Sort By
     */
    protected $index = 'id';

    /**
     * Sort Order By 
     * DESCENDING ORDER DEFAULT
     */
    protected $sortOrder = 'DESC';

    /**
     * Enabling mass action
     *
     * @var boolean
     */
    protected $enableMassAction = false;
    
    /**
     * Enabling action
     *
     * @var boolean
     */
    protected $enableAction = false;

    protected $table = 'testimonials';

    protected $HumanizeDateTime = true;

    protected $paginate = true;

    public function __construct()
    {
        parent::__construct();
    }


    public function prepQuery() {
        
        // Selecting data from database to process  by building query such as pagination, sortBy, SortOrder etc
        $queryBuilder = DB::table($this->table)->select(
            'id',
            'name',
            'company',
            'created_at',
            'updated_at'
        );

        // Setting to queryBuilder to process the data
        $this->setQueryBuilder($queryBuilder);

    }


    public function addColumns()
    {

        $this->addColumn([
            'index' => 'name',
            'label' => 'Name',
            'type' => 'string'
        ]);

        $this->addColumn([
            'index' => 'company',
            'label' => 'Company',
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


    public function prepareMassAction(){
        $this->addMassAction([
            'type'      => 'Delete',
            'lable'     => 'Bulk Delete',
            'action'    => route('testimonial-mass-destroy'),
            'method' => 'DELETE' 
        ]);
    }

    public function prepareAction()
    {
        // Edit Testimonail
        $this->addAction([
            'title' => 'Edit',
            'method' => 'GET',
            'route' => 'testimonials-edit',
            'icon' => 'fas fa-pencil-alt',
            
        ]);

        // Delete Testimonial
        $this->addAction([
            'title' => 'Delete',
            'method' => 'DELETE',
            'route' => 'testimonials-delete',
            'icon' => 'far fa-trash-alt'
        ]);
    }

}