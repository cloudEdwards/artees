<?php


use Artees\Core\CommandBus;
use Artees\Forms\PublishStatusForm;
use Artees\Statuses\PublishStatusCommand;
use Artees\Statuses\StatusRepository;

class StatusesController extends \BaseController {

	use CommandBus;

	protected $statusRepository;


	function __construct(
		PublishStatusForm $publishStatusForm,
		StatusRepository $statusRepository
	) 
	{
		$this->publishStatusForm = $publishStatusForm;
		$this->statusRepository = $statusRepository;
		
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$statuses = $this->statusRepository->getAllForUser(Auth::user());	

		return View::make('statuses.index', compact('statuses'));
	}

	/**
	* Stores Status Post in Database
	*
	* @var varName
	* @param paramName
	* @return mixed
	*/
	public function store()
	{
		
		$this->publishStatusForm->validate(Input::only('body'));

		$this->execute(
			new PublishStatusCommand(
				Input::get('body'),
				Auth::user()->id
			)
		);

		Flash::message('You Status has been updated');

		return Redirect::refresh();

	}

}
