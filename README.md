## About
This is a simple project with the proposition to be a lib for apis and easy to develop.
Principal use in your Laravel Project

### To use in your project:

First needed to install the library, run follow command:
- `composer require mayconoliveira/simple-response`

## To use in your Laravel Project, follow steps:

on `App\Http\Controllers\Controller`;

Insert in your constructor this code

    protected $response;

    public function __construct()
    {
        $this->response = new ApiResponse();
    }

After this All Your controllers with extends Controller can access ApiResponse methods 

    class ExampleController extends Controller
    {
        public function example()
        {
            return $this->response->successResponse('data');
        }
    }
