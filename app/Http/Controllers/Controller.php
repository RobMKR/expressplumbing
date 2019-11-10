<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function singleService($service)
    {
        switch ($service){
            case 'heater':
                $text = '
                <p>Your water heater does its job flawlessly for years. Then, suddenly, something happens causing you to need water heater repair. There is no hot water, or even worse, all the hot water is spilling onto the floor. Talmich Plumbing & Heating offers fast same or next day, and even emergency water heater service in Colorado Springs and surrounding communities. Call us when you find yourself ‘Not’ in hot water, and feel confident we have your back.</p>

                <p>Why choose Express Plumbing? We are a family-owned and operated plumbing company. Our hallmark is personal service, delivered with professional results. We are a full-licensed and insured plumbing and heating contractor, offering both residential and commercial services. </p>
                
                <p>Our team of professional plumbers can handle all of your water heater installation, service, repair, and replacement needs. We service and replace traditional storage as well as the latest on-demand water heater models.</p>
                
                ';
                $img = '/img/service/service1.jpg';
                $header = 'Water Heater';
                break;
            case 'bathroom':
                $text = '
                <p> Bathrooms are a hub of activity, and you need everything to work: outlets, faucets, toilets, showers, tubs, showerheads and moisture-removing venting fans. Whatever the project is that you need completed, we promise to arrive on time and perform quality workmanship that\'s guaranteed to your satisfaction.</p>

                <h3>BATHROOM REMODEL & RENOVATION</h3>
                <p>If your bathroom is tired and outdated, call on Mr. Handyman for a complete bathroom remodel and renovation. Your local home improvement professional can help install tile flooring, knock out walls and install the perfect vanity. From painting to plumbing, Mr. Handyman is the one-call solution to your bathroom and remodel project.</p>
                
                <h3>BATHROOM FAN INSTALLATION & REPAIR</h3>
                <p>Bathroom fans are your home’s main protection against mold and mildew issues. We remove old fans and install new fans. We can inspect your venting path for mold and, if needed, replace it with new tubing. We can help you pick out the right fan, too.</p>
                
                <h3>CAULKING</h3>
                <p>Tubs with bad caulking let water go behind walls and under the floors, damaging wood and wallboard and even the basement or downstairs ceiling. Restore the looks of your tub, stop water damage and prevent mold with professional caulking service from experienced home improvement professionals.</p>
                
                <h3>DRYWALL REPAIRS & FINISHING</h3>
                <p>We inspect bathroom drywall that you suspect may have been damaged by leaking water or moisture, and we fix wallboard in a way that’s seamless with the décor. We also help homeowners by identifying the underlying source of the leak causing drywall water damage in bathrooms.</p>
                    
                ';
                $img = '/img/service/service2.jpg';
                $header = 'Bathroom';
                break;
            case 'toilet':
                $text = '
                
                <h3>CLOGGED TOILET REPAIR</h3>
                <p>A clogged toilet is one of the most common bathroom plumbing problems. Most homeowners can easily unclog a toilet with a plunger. For minor clogs, you may be able to unclog the toilet without a plunger. When the toilet drain is overwhelmed with toilet paper or non-flushable items, you may need professional help to unclog your toilet.

                Our plumbers are on call to unclog your toilet and restore full drainage and powerful flushes. Our skilled plumbers can also fix any other toilet problems, including running toilets, leaking toilets, broken tanks and bowls, and toilets that don\'t flush properly. Call Plumbing Express today to schedule an appointment to fix your clogged toilet.</p>


                <h3>RUNNING TOILET REPAIR</h3>
                <p>After a flush, your toilet should stop running water once the toilet bowl is full. Toilets that continue to run have an internal leak--water is being dumped down the overflow, wasting as many as 200 gallons of water a day.

                Running toilets can be the result of a corroded overflow pipe, worn out flush valve assembly, or broken flapper valve. Give the professionals at Plumbing Express a call to repair your running toilet and reduce wasted water.
                
                Check out our FAQ section for other helpful bathroom tips.</p>
                
                <h3>TOILET INSTALLATION AND REPLACEMENT</h3>
                <p>Whether you\'re remodeling your bathroom or just updating old fixtures, replacing a toilet can be a big job if you\'ve never done it before. If you aren\'t feeling confident about completing a toilet installation yourself, or if you uncover any bathroom plumbing problems during your remodel, Plumbing Express plumbers are available to help you out. A licensed, experienced Plumbing Express plumber can expedite replacing the toilet, address any other bathroom repairs, and ensure that the job is done right.</p>
                ';
                $img = '/img/service/service3.jpg';
                $header = 'Toilet';
                break;
            case 'tube':
                $img = '/img/service/service4.jpg';
                $text = '
                
                Make your shower installation hassle free. Buy a new shower through our Shower Replacement Service and have it installed by one of our own team of experts.

Whether you are unsure what shower you have or worried about how you can replace it, our friendly team will happily advise you every step of the way. 
                
                ';
                $header = 'Tube and Shower';
                break;
            case 'pipe':
                $text = '
                
                <p>Plumbing Express provides pipe repair and pipe replacement services in addition to our drain cleaning services. Our plumbers are experts in pipe repair, replacement and cleaning – and are prepared to correct a number of problems, including:</p>
                </br>
                <p>- Broken, cracked, offset or collapsed pipe: Pipes have been damaged due to shifting soil, frozen ground, settling, etc.</p>
                <p>- Pipe Blockage: Grease buildup or a foreign object is restricting or prohibiting proper flow and/or cleaning of the line.</p>
                <p>- Pipe Corrosion: The pipe has deteriorated and/or broken, causing collapses in the line and restricting flow.</p>
                <p>- Bellied pipe: A section of the pipe has sunk due to ground or soil conditions, creating a valley that collects paper and waste.</p>
                <p>- Leaking joints: The seals between pipes have broken, allowing water to escape into the area surrounding the pipe.</p>
                <p>- Root in sewer pipe line: Tree or shrub roots have invaded the sewer line and/or have damaged the line, preventing normal cleaning.</p>
                <p>- Off-grade pipe: Existing pipes are constructed of substandard material that may have deteriorated or corroded.</p>
                </br>
                <p>You can trust the quality and professionalism of our work. Our plumbing technicians are experts in pipe repair and will diagnose and service your pipes to ensure your plumbing is working properly as quickly as possible. Whether you need pipe repair or pipe replacement services at midnight, on the weekend, or on Thanksgiving Day, we are ready to take your call and give you efficient and top-of-the-line service.</p>
               
                
                ';
                $img = '/img/service/service5.jpg';
                $header = 'Pipes and sweres';
                break;
            case 'drain':
                $text = '
                
                    <p>Focused on the prevention of water and ground pollution from liquid spills the Express range of drainage services are at the forefront in eliminating pollution of the environment due to spills passing through site drainage systems.</p>

                    <p>Plumbing Express Services provide an extensive range of services extending from the critical day to day drain maintenance and conformance through to site modelling and full project delivery for spill and firewater containment.</p>
                    
                    <p>We are proud of our continuous innovation, investment and the development in our unique products and services offering</p>
                    
                ';
                $img = '/img/service/service6.jpg';
                $header = 'Drainage';
                break;
            case 'tankless':
                $text = '
                    <p>The future of water heating is here and Commercial Plumbing is ready to bring this future to our clients. The tankless water heater is an energy-efficient heater that provides hot water on demand and only when needed. Without a reservoir tank like traditional water heaters coupled with the technology of the heating system, there are numerous advantages to this type of water heater.</p>
                ';
                $img = '/img/service/commercial1.jpg';
                $header = 'Tankless Water Heating';
                break;
            case 'solar':
                $text = '
                
                <p>The local utility company touts solar water heating as one of the best ways to decrease utility costs, conserve energy and save the environment. Express Plumbing recognizes the value in harnessing renewable energy while saving customers money. We have installed numerous solar water heating systems at a single family residences and multi-story residential complexes</p>
                
                ';
                $img = '/img/service/commercial2.jpg';
                $header = 'Solar Water Heating';
                break;
            case 'rehabit':
                $text = '
                
                <p>Express Plumbing currently represents the Lateral Lining System known as Perma Liner. The Lateral Lining System is designed to rehabilitate existing small diameter pipelines without extensive excavation by using a cured-in place plastic-pipe (CIPPP) method of pipe rehabilitation. Damaged or waste pipes, like sewer laterals, can be rehabilitated using this technique. The major benefit of this system is not having to remove, excavate or install new pipes to leaking service laterals that are buried underneath buildings, driveways, swimming pools, walls or tiled floors, resulting in reduced repair costs and less anxiety for the property owner.</p>

                <p>In addition, existing service laterals are repaired in a significantly reduced amount of time. Because the existing PVC, clay or cast iron pipe is permanently repaired and not removed, the time involved is less than an installation of a new sanitary sewer service lateral. Some of the successful lining projects completed to date have been performed at shopping centers, commercial properties, residential homes and apartment complexes.</p>
                
                
                ';
                $img = '/img/service/commercial3.jpg';
                $header = 'Pipe Rehabilitation';
                break;
            default:
                abort(404);
        }

        return view('pages.single-service', [
            'text' => $text,
            'img' => $img,
            'header' => $header
        ]);
    }
}
