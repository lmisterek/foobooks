<?php


namespace P3\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Badcow\LoremIpsum\Generator;
use Rych\Random\Random;


class PageController extends Controller
{

    public function index()
    {
        #process variable data or params
        #talk to the model
        #recieve data from the model
        #compile or process the data from the model
        #pass the data to the correct view
        return view('page.form');
    }



    public function getLoremIpsumText(Request $request)
    {
        # Validate the request....
        # Validate
        $this->validate($request, [
            'howManyParagraphs' => 'required|int|min:1|max:100',
        ]);


        # Generate the lorem ipsum text


        $howManyParagraphs = $request->input('howManyParagraphs');


        $loremenator = new Generator();

        $paragraphs = $loremenator->getParagraphs($howManyParagraphs);
        $text = implode('<p>', $paragraphs);

        # Display the results...
        return $text;

    }

    public function postText(){
        $first = 'LeeAnna';
        $last = 'Misterek';

        $full = $first." ".$last;

        return view('page.results')->with("fullname", $full);
    }


}
