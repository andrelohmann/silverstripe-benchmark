 <?php
/**
 * Implements a basic Controller
 * @package some config
 * http://doc.silverstripe.org/framework/en/3.1/topics/controller
 */
class BenchmarkController extends Controller {
	
	public static $url_topic = 'benchmark';
	
	public static $url_segment = 'benchmark';
	
	private static $allowed_actions = array( 
		'index',
	);
	
	public static $template = 'BlankPage';
	
	/**
	 * Template thats used to render the pages.
	 *
	 * @var string
	 */
	public static $template_main = 'Page';
	
	/**
	 * Initialise the controller
	 */
	public function init() {
		parent::init();
		
		if(!defined('BENCHMARK_KEY') || !isset($_SERVER['HTTP_BENCHMARK_KEY']) || $_SERVER['HTTP_BENCHMARK_KEY'] != BENCHMARK_KEY || !defined('BENCHMARK_SECRET') || !isset($_SERVER['HTTP_BENCHMARK_SECRET']) || $_SERVER['HTTP_BENCHMARK_SECRET'] != BENCHMARK_SECRET) return $this->httpError(404, _t('Benchmark.WRONGCREDENTIALS', 'Benchmark.WRONGCREDENTIALS'));
 	}

	/**
	 * Returns a link to this controller.  Overload with your own Link rules if they exist.
	 */
	public function Link() {
		return self::$url_segment .'/';
	}

    /**
     * Default action if no other was specified.
     * @action
     * @todo maybe we can refactor this method later
     */
    public function index($request) {
        if(class_exists('BenchmarkTest') && in_array("BenchmarkTestInterface", class_implements('BenchmarkTest'))){
            $Content = BenchmarkTest::run();
            
            return $this->customise(new ArrayData(array(
                "Title" => _t('Benchmark.RUNSUCCESSTITLE', 'Benchmark.RUNSUCCESSTITLE'),
                "Content" => $Content
            )))->renderWith(
                array('Benchmark_index', 'Benchmark', $this->stat('template_main'), 'BlankPage')
            );
        }else{
            return $this->httpError(404, _t('Benchmark.BENCHMARKTESTMISSING', 'Benchmark.BENCHMARKTESTMISSING'));
        }
    }
}
