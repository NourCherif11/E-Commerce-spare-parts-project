<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ViewController extends Controller
{
    public function showindex()
    {
    // Fetch random products with category_id between 9 and 14

    $electroproducts = Product::whereBetween('category_id', [9, 14])
        ->inRandomOrder() // Randomize the products
        ->take(10) // Limit to 10 products (or any number you prefer)
        ->get();

    // Process each product to determine the valid image
    foreach ($electroproducts as $product) {
        $product->validImage = 'default.jpg'; // Default image path

        if (is_array($product->path) || is_object($product->path)) {
            foreach ($product->path as $image) {
                $imagePath = "assets/images/products/{$image->image_path}";

                if (file_exists(public_path($imagePath))) {
                    $product->validImage = asset($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
    }
    $houseproducts = Product::whereBetween('category_id', [1, 8])
        ->inRandomOrder() // Randomize the products
        ->take(10) // Limit to 10 products (or any number you prefer)
        ->get();

    // Process each product to determine the valid image
    foreach ($houseproducts as $product) {
        $product->validImage = 'default.jpg'; // Default image path

        if (is_array($product->path) || is_object($product->path)) {
            foreach ($product->path as $image) {
                $imagePath = "assets/images/products/{$image->image_path}";

                if (file_exists(public_path($imagePath))) {
                    $product->validImage = asset($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
    }

    return view('index', compact('electroproducts','houseproducts'));

}    public function detail($id)
    {
        $product = Product::find($id);
        $product->validImage = 'default.jpg'; // Default image path

        if (is_array($product->path) || is_object($product->path)) {
            foreach ($product->path as $image) {
                $imagePath = "assets/images/products/{$image->image_path}";

                if (file_exists(public_path($imagePath))) {
                    $product->validImage = asset($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('detail', compact('product'));
    }


    public function contact()
    {
        return view('contact');
    }
    /*household*/

    public function washingMachine()
    {   $brands = Brand::all();
        $washingMachines = Product::where('category_id', 2)->paginate(15);
        foreach ($washingMachines as $washingMachine) {
           $washingMachine->validImage = 'default.jpg'; // Default image path

           if (is_array($washingMachine->path) || is_object($washingMachine->path)) {
               foreach ($washingMachine->path as $image) {
                $imagePath = "assets/images/products/{$image->image_path}";

                if (file_exists(public_path($imagePath))) {
                       $washingMachine->validImage = asset($imagePath);
                       break; // Only show the first valid image
                   }
               }
           }
       }
       return view('washingmachine', ['washingMachines' => $washingMachines],compact('brands'));
       }

        public function refrigerator()
            {
                $refrigerators = Product::where('category_id', 1)->paginate(15);
                $brands = Brand::all();
                foreach ($refrigerators as $refrigerator) {
                    $refrigerator->validImage = 'default.jpg'; // Default image path

                    if (is_array($refrigerator->path) || is_object($refrigerator->path)) {
                        foreach ($refrigerator->path as $image) {
                            $imagePath = "assets/images/products/{$image->image_path}";

                            if (file_exists(public_path($imagePath))) {
                                $refrigerator->validImage = asset($imagePath);
                                break; // Only show the first valid image
                            }
                        }
                    }
                }
                return view('refrigerator', compact('refrigerators','brands'));
            }
            public function air()
       {
           $airConditioners = Product::where('category_id', 8)->paginate(15);
           $brands = Brand::all();
           foreach ($airConditioners as $airConditioner) {
               $airConditioner->validImage = 'default.jpg'; // Default image path

               if (is_array($airConditioner->path) || is_object($airConditioner->path)) {
                   foreach ($airConditioner->path as $image) {
                       $imagePath = "assets/images/products/{$image->image_path}";

                       if (file_exists(public_path($imagePath))) {
                           $airConditioner->validImage = asset($imagePath);
                           break; // Only show the first valid image
                       }
                   }
               }
           }
           return view('air', compact('airConditioners','brands'));}
           public function mixer()
       {
           $mixers = Product::where('category_id', 3)->paginate(15);
           $brands = Brand::all();
           foreach ($mixers as $mixer) {
               $mixer->validImage = 'default.jpg'; // Default image path

               if (is_array($mixer->path) || is_object($mixer->path)) {
                   foreach ($mixer->path as $image) {
                       $imagePath = "assets/images/products/{$image->image_path}";

                       if (file_exists(public_path($imagePath))) {
                           $mixer->validImage = asset($imagePath);
                           break; // Only show the first valid image
                       }
                   }
               }
           }
           return view('mixer', compact('mixers','brands'));
        }
        public function dishwasher()
        {
            $dishwashers = Product::where('category_id', 4)->paginate(15);
            $brands = Brand::all();
            foreach ($dishwashers as $dishwasher) {
                $dishwasher->validImage = 'default.jpg'; // Default image path

                if (is_array($dishwasher->path) || is_object($dishwasher->path)) {
                    foreach ($dishwasher->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $dishwasher->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('dishwasher', compact('dishwashers','brands'));
        }
        public function waterheater()
        {
            $waterheaters = Product::where('category_id', 17)->paginate(15);
            $brands = Brand::all();
            foreach ($waterheaters as $waterheater) {
                $waterheater->validImage = 'default.jpg'; // Default image path

                if (is_array($waterheater->path) || is_object($waterheater->path)) {
                    foreach ($waterheater->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $waterheater->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('waterheater', compact('waterheaters','brands'));
        }
        public function oven()
        {
            $ovens = Product::where('category_id', 5)->paginate(15);
            $brands = Brand::all();
            foreach ($ovens as $oven) {
                $oven->validImage = 'default.jpg'; // Default image path

                if (is_array($oven->path) || is_object($oven->path)) {
                    foreach ($oven->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $oven->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('oven', compact('ovens','brands'));
        }
        public function coffee()
        {
            $coffees = Product::where('category_id', 6)->paginate(15);
            $brands = Brand::all();
            foreach ($coffees as $coffee) {
                $coffee->validImage = 'default.jpg'; // Default image path

                if (is_array($coffee->path) || is_object($coffee->path)) {
                    foreach ($coffee->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $coffee->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('coffee', compact('coffees','brands'));
        }

/*electronic*/

        public function smartphone(Request $request)
        {
            // Get all brands
            $brands = Brand::all();

            // Check if there are any selected brands in the request
            $selectedBrands = $request->input('brands', []);

            // If brands are selected, filter the products by those brands
            if (!empty($selectedBrands)) {
                $mobiles = Product::where('category_id', 9)
                    ->whereIn('id', $selectedBrands)
                    ->paginate(15);
            } else {
                // If no brands are selected, return all products in the category
                $mobiles = Product::where('category_id', 9)->paginate(15);
            }

            // Process each mobile product to determine the valid image
            foreach ($mobiles as $mobile) {
                $mobile->validImage = 'default.jpg'; // Default image path

                if (is_array($mobile->path) || is_object($mobile->path)) {
                    foreach ($mobile->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $mobile->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }

            if ($request->ajax()) {
                return view('partials.products', compact('mobiles'))->render();
            }

            return view('smartphone', compact('mobiles', 'brands'));
        }

        public function laptop()
        {
            $laptops = Product::where('category_id', 12)->paginate(15);
            $brands = Brand::all();
            foreach ($laptops as $laptop) {
                $laptop->validImage = 'default.jpg'; // Default image path

                if (is_array($laptop->path) || is_object($laptop->path)) {
                    foreach ($laptop->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $laptop->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('pcportable', compact('laptops','brands'));
        }
        public function ecran()
        {
            $ecrans = Product::where('category_id', 14)->paginate(15);
            $brands = Brand::all();
            foreach ($ecrans as $ecran) {
                $ecran->validImage = 'default.jpg'; // Default image path

                if (is_array($ecran->path) || is_object($ecran->path)) {
                    foreach ($ecran->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $ecran->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('ecran', compact('ecrans','brands'));
        }
        public function pcb()
        {
            $pcbureaus = Product::where('category_id', 13)->paginate(15);
            $brands = Brand::all();
            foreach ($pcbureaus as $pcbureau) {
                $pcbureau->validImage = 'default.jpg'; // Default image path

                if (is_array($pcbureau->path) || is_object($pcbureau->path)) {
                    foreach ($pcbureau->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $pcbureau->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('pcbureau', compact('pcbureaus','brands'));
        }
        public function smartwatch()
        {
            $smartwatchs = Product::where('category_id', 15)->paginate(15);
            $brands = Brand::all();
            foreach ($smartwatchs as $smartwatch) {
                $smartwatch->validImage = 'default.jpg'; // Default image path

                if (is_array($smartwatch->path) || is_object($smartwatch->path)) {
                    foreach ($smartwatch->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $smartwatch->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('smartwatch', compact('smartwatchs','brands'));
        }
        public function tablet()
        {
            $tablets = Product::where('category_id', 10)->paginate(15);
            $brands = Brand::all();
            foreach ($tablets as $tablet) {
                $tablet->validImage = 'default.jpg'; // Default image path

                if (is_array($tablet->path) || is_object($tablet->path)) {
                    foreach ($tablet->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $tablet->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('tablette', compact('tablets','brands'));
        }

        public function hautparleur()
        {
            $hautparleurs = Product::where('category_id', 15)->paginate(15);
            $brands = Brand::all();
            foreach ($hautparleurs as $hautparleur) {
                $hautparleur->validImage = 'default.jpg'; // Default image path

                if (is_array($hautparleur->path) || is_object($hautparleur->path)) {
                    foreach ($hautparleur->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $hautparleur->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('hautparleur', compact('hautparleurs', 'brands'));
        }

        public function ecouteur()
        {
            $ecouteurs = Product::where('category_id', 16)->paginate(15);
            $brands = Brand::all();
            foreach ($ecouteurs as $ecouteur) {
                $ecouteur->validImage = 'default.jpg'; // Default image path

                if (is_array($ecouteur->path) || is_object($ecouteur->path)) {
                    foreach ($ecouteur->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $ecouteur->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('ecouteur', compact('ecouteurs', 'brands'));
        }

        public function clavier()
        {
            $claviers = Product::where('category_id', 17)->paginate(15);
            $brands = Brand::all();
            foreach ($claviers as $clavier) {
                $clavier->validImage = 'default.jpg'; // Default image path

                if (is_array($clavier->path) || is_object($clavier->path)) {
                    foreach ($clavier->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $clavier->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('clavier', compact('claviers', 'brands'));
        }

        /* Components mobile */
        public function lcd()
        {
            $lcds = Product::where('category_id', 18)->paginate(15);
            $brands = Brand::all();
            foreach ($lcds as $lcd) {
                $lcd->validImage = 'default.jpg'; // Default image path

                if (is_array($lcd->path) || is_object($lcd->path)) {
                    foreach ($lcd->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $lcd->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('lcd', compact('lcds', 'brands'));
        }

        public function connectors()
        {
            $connectors = Product::where('category_id', 19)->paginate(15);
            $brands = Brand::all();
            foreach ($connectors as $connector) {
                $connector->validImage = 'default.jpg'; // Default image path

                if (is_array($connector->path) || is_object($connector->path)) {
                    foreach ($connector->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $connector->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('connectors', compact('connectors', 'brands'));
        }

        public function batterie()
        {
            $batteries = Product::where('category_id', 20)->paginate(15);
            $brands = Brand::all();
            foreach ($batteries as $batterie) {
                $batterie->validImage = 'default.jpg'; // Default image path

                if (is_array($batterie->path) || is_object($batterie->path)) {
                    foreach ($batterie->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $batterie->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('batterie', compact('batteries', 'brands'));
        }

        public function covers()
        {
            $covers = Product::where('category_id', 21)->paginate(15);
            $brands = Brand::all();
            foreach ($covers as $cover) {
                $cover->validImage = 'default.jpg'; // Default image path

                if (is_array($cover->path) || is_object($cover->path)) {
                    foreach ($cover->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $cover->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('covers', compact('covers', 'brands'));
        }

        public function flexcables()
        {
            $flexcables = Product::where('category_id', 22)->paginate(15);
            $brands = Brand::all();
            foreach ($flexcables as $flexcable) {
                $flexcable->validImage = 'default.jpg'; // Default image path

                if (is_array($flexcable->path) || is_object($flexcable->path)) {
                    foreach ($flexcable->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $flexcable->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('flexcables', compact('flexcables', 'brands'));
        }

        public function simslots()
        {
            $simslots = Product::where('category_id', 23)->paginate(15);
            $brands = Brand::all();
            foreach ($simslots as $simslot) {
                $simslot->validImage = 'default.jpg'; // Default image path

                if (is_array($simslot->path) || is_object($simslot->path)) {
                    foreach ($simslot->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $simslot->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('simslots', compact('simslots', 'brands'));
        }

        public function cartemere()
        {
            $cartemeres = Product::where('category_id', 24)->paginate(15);
            $brands = Brand::all();
            foreach ($cartemeres as $cartemere) {
                $cartemere->validImage = 'default.jpg'; // Default image path

                if (is_array($cartemere->path) || is_object($cartemere->path)) {
                    foreach ($cartemere->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $cartemere->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('cartemere', compact('cartemeres', 'brands'));
        }

        /* Components ordinateur */
        public function disquedur()
        {
            $disquedurs = Product::where('category_id', 25)->paginate(15);
            $brands = Brand::all();
            foreach ($disquedurs as $disquedur) {
                $disquedur->validImage = 'default.jpg'; // Default image path

                if (is_array($disquedur->path) || is_object($disquedur->path)) {
                    foreach ($disquedur->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $disquedur->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('disquedur', compact('disquedurs', 'brands'));
        }

        public function chargeurpc()
        {
            $chargeurpcs = Product::where('category_id', 26)->paginate(15);
            $brands = Brand::all();
            foreach ($chargeurpcs as $chargeurpc) {
                $chargeurpc->validImage = 'default.jpg'; // Default image path

                if (is_array($chargeurpc->path) || is_object($chargeurpc->path)) {
                    foreach ($chargeurpc->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $chargeurpc->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('chargeurpc', compact('chargeurpcs', 'brands'));
        }

        public function batteriepc()
        {
            $batteriepcs = Product::where('category_id', 27)->paginate(15);
            $brands = Brand::all();
            foreach ($batteriepcs as $batteriepc) {
                $batteriepc->validImage = 'default.jpg'; // Default image path

                if (is_array($batteriepc->path) || is_object($batteriepc->path)) {
                    foreach ($batteriepc->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $batteriepc->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('batteriepc', compact('batteriepcs', 'brands'));
        }


        public function processeur()
        {
            $processeurs = Product::where('category_id', 40)->paginate(15);
            $brands = Brand::all();
            foreach ($processeurs as $processeur) {
                $processeur->validImage = 'default.jpg'; // Default image path

                if (is_array($processeur->path) || is_object($processeur->path)) {
                    foreach ($processeur->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $processeur->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('processeur', compact('processeurs', 'brands'));
        }

        public function memoireram()
        {
            $memoirerams = Product::where('category_id', 28)->paginate(15);
            $brands = Brand::all();
            foreach ($memoirerams as $memoireram) {
                $memoireram->validImage = 'default.jpg'; // Default image path

                if (is_array($memoireram->path) || is_object($memoireram->path)) {
                    foreach ($memoireram->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $memoireram->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('memoireram', compact('memoirerams', 'brands'));
        }

        public function ventilateur()
        {
            $ventilateurs = Product::where('category_id', 29)->paginate(15);
            $brands = Brand::all();
            foreach ($ventilateurs as $ventilateur) {
                $ventilateur->validImage = 'default.jpg'; // Default image path

                if (is_array($ventilateur->path) || is_object($ventilateur->path)) {
                    foreach ($ventilateur->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $ventilateur->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('ventilateur', compact('ventilateurs', 'brands'));
        }

        public function bloc()
        {
            $blocs = Product::where('category_id', 30)->paginate(15);
            $brands = Brand::all();
            foreach ($blocs as $bloc) {
                $bloc->validImage = 'default.jpg'; // Default image path

                if (is_array($bloc->path) || is_object($bloc->path)) {
                    foreach ($bloc->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $bloc->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('bloc', compact('blocs', 'brands'));
        }

        public function cartemerepc()
        {
            $cartemerepcs = Product::where('category_id', 31)->paginate(15);
            $brands = Brand::all();
            foreach ($cartemerepcs as $cartemerepc) {
                $cartemerepc->validImage = 'default.jpg'; // Default image path

                if (is_array($cartemerepc->path) || is_object($cartemerepc->path)) {
                    foreach ($cartemerepc->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $cartemerepc->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('cartemerepc', compact('cartemerepcs', 'brands'));
        }

        public function cartegraphique()
        {
            $cartegraphiques = Product::where('category_id', 32)->paginate(15);
            $brands = Brand::all();
            foreach ($cartegraphiques as $cartegraphique) {
                $cartegraphique->validImage = 'default.jpg'; // Default image path

                if (is_array($cartegraphique->path) || is_object($cartegraphique->path)) {
                    foreach ($cartegraphique->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $cartegraphique->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('cartegraphique', compact('cartegraphiques', 'brands'));
        }

        public function cartenetwork()
        {
            $cartenetworks = Product::where('category_id', 33)->paginate(15);
            $brands = Brand::all();
            foreach ($cartenetworks as $cartenetwork) {
                $cartenetwork->validImage = 'default.jpg'; // Default image path

                if (is_array($cartenetwork->path) || is_object($cartenetwork->path)) {
                    foreach ($cartenetwork->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $cartenetwork->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('cartenetwork', compact('cartenetworks', 'brands'));
        }

        public function adapters()
        {
            $adapters = Product::where('category_id', 34)->paginate(15);
            $brands = Brand::all();
            foreach ($adapters as $adapter) {
                $adapter->validImage = 'default.jpg'; // Default image path

                if (is_array($adapter->path) || is_object($adapter->path)) {
                    foreach ($adapter->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $adapter->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('adapters', compact('adapters', 'brands'));
        }

        public function powerbanks()
        {
            $powerbanks = Product::where('category_id', 35)->paginate(15);
            $brands = Brand::all();
            foreach ($powerbanks as $powerbank) {
                $powerbank->validImage = 'default.jpg'; // Default image path

                if (is_array($powerbank->path) || is_object($powerbank->path)) {
                    foreach ($powerbank->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $powerbank->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('powerbanks', compact('powerbanks', 'brands'));
        }

        public function carchargers()
        {
            $carchargers = Product::where('category_id', 36)->paginate(15);
            $brands = Brand::all();
            foreach ($carchargers as $carcharger) {
                $carcharger->validImage = 'default.jpg'; // Default image path

                if (is_array($carcharger->path) || is_object($carcharger->path)) {
                    foreach ($carcharger->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $carcharger->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('carchargers', compact('carchargers', 'brands'));
        }

        public function cablemanagement()
        {
            $cablemanagements = Product::where('category_id', 37)->paginate(15);
            $brands = Brand::all();
            foreach ($cablemanagements as $cablemanagement) {
                $cablemanagement->validImage = 'default.jpg'; // Default image path

                if (is_array($cablemanagement->path) || is_object($cablemanagement->path)) {
                    foreach ($cablemanagement->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $cablemanagement->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('cablemanagement', compact('cablemanagements', 'brands'));
        }

        public function cases()
        {
            $cases = Product::where('category_id', 38)->paginate(15);
            $brands = Brand::all();
            foreach ($cases as $case) {
                $case->validImage = 'default.jpg'; // Default image path

                if (is_array($case->path) || is_object($case->path)) {
                    foreach ($case->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $case->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('cases', compact('cases', 'brands'));
        }

        public function screenprotectors()
        {
            $screenprotectors = Product::where('category_id', 39)->paginate(15);
            $brands = Brand::all();
            foreach ($screenprotectors as $screenprotector) {
                $screenprotector->validImage = 'default.jpg'; // Default image path

                if (is_array($screenprotector->path) || is_object($screenprotector->path)) {
                    foreach ($screenprotector->path as $image) {
                        $imagePath = "assets/images/products/{$image->image_path}";

                        if (file_exists(public_path($imagePath))) {
                            $screenprotector->validImage = asset($imagePath);
                            break; // Only show the first valid image
                        }
                    }
                }
            }
            return view('screenprotectors', compact('screenprotectors', 'brands'));}

    public function about()
    {
        return view('about');
    }



    }
