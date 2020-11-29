<?php 

namespace Modules\Admin\Datagrids;

abstract class DataGrid {

    /**
     * Title name for the data table header 
     *
     * @var [type]
     */
    protected $title = null;


    /**
     * set index columns, ex: id 
     *  
     * @var int
     */
    protected $index = null;

    /**
     * Sort Order For Datagrid
     * Default is ASCENDING ORDER
     *
     * @var string
     */
    protected $sortOrder = 'asc';

    /**
     * Array to hold all the columns which will be displayed on frontened
     *
     * @var array
     */
    protected $columns = [];

    /**
     * Final result of the datagrid program that is collection object.
     * 
     * @var array
    */
    protected $collection = [];

    /**
     * Hold query builder instance of the query prepared by executing datagrid
     * class method setQueryBuilder
     * 
     * @var array
     */
    protected $queryBuilder = [];


    /**
     * set of actions for deleting, editing, showing etc
     *
     * @var array
     */
    protected $actions = [];

    /**
     * Mass Actions for Mass Delete 
     */
    protected $massActions = [];

    /**
     * Paginate the data or collection
     * if set true which is by default it will show the pagination
     * @var boolean
     */
    protected $paginate = false;

    /**
     * To show mass action or not.
     * 
     * @var bool
     */
    protected $enableMassAction = false;

    /**
     * To enable actions or not.
     */
    protected $enableAction = true;

    /**
     * Sort By column
     */
    protected $sortBy = 'id';

    /**
     * Items to show per page when paginating or showing collection
     *
     * @var integer
     */
    protected $itemsPerPage = 10;


    /**
     * Date Time to Humanize format
     *
     */
    protected $HumanizeDateTime = false;
    
    

    public function __construct()
    {
       $this->invoker =  $this;
    }
    
    abstract public function prepQuery();
    abstract public function addColumns();

    /**
     * @param  string  $column
     * @return void
    */
    public function addColumn($column) {
        array_push($this->columns , $column);
    }

    /**
     * @param  array  $action
     * @return void
    */
    public function addAction($action) {
        array_push($this->actions, $action);
        $this->enableAction = true;
    }

    /**
     * @param  array  $action
     * @return void
    */
    public function addMassAction($massaction) {
        array_push($this->massActions, $massaction);
        $this->enableMassAction = true;
    }

    public function getCollection() {
        if($this->paginate) {
            if($this->itemsPerPage > 0) {
                $this->collection = $this->queryBuilder->orderBy($this->sortBy, $this->sortOrder)->paginate($this->itemsPerPage);
            }
        } else {
            $this->collection = $this->queryBuilder->orderBy($this->sortBy, $this->sortOrder)->get();
        }

        return  $this->collection;
    }

    public function setQueryBuilder($queryBuilder){
        $this->queryBuilder = $queryBuilder;
    }


    public function prepareMassAction(){}
    public function prepareAction(){}

    /**
     * Render the datatable
     *
     * @return Illuminate\View\View
     */
    public function render() {

        $this->addColumns();
        $this->prepQuery();
        $this->prepareAction();
        $this->prepareMassAction();

        return view('ui::admin.datatable.table')->with('results' , [
            'title' => $this->title,
            'columns' => $this->columns,
            'records' => $this->getCollection(),
            'enableMassAction' => $this->enableMassAction,
            'massActions' => $this->massActions,
            'actions' => $this->actions,
            'enableAction' => $this->enableAction,
            'paginated' => $this->paginate,
            'HumanizeDateTime' => $this->HumanizeDateTime
        ]);

    }
}