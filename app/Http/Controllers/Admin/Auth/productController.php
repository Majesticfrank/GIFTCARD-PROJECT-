<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\Subcategory1;
use Illuminate\Http\Request;

class productController extends Controller
{
    protected $products;
    public function __construct(){
        $this->products = new product();
    }
     public function index(){
          $products = $this->products->all(); 
        return view('product.index', compact('products'));
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {
         $validatedData = $request->validate([
             'productname' => 'required',
             'description' => 'required',
             'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file size and allowed extensions as needed
         ]);
         // Check if the file was uploaded successfully
         if ($request->hasFile('photo')) {
             // Generate a unique file name
             $fileName = time().$request->file('photo')->getClientOriginalName();
             // Move the uploaded file to the public/images directory
             $request->file('photo')->move(public_path('images'), $fileName);
             // Save the product with the file name
             $validatedData['photo'] = $fileName; 
         }
         Product::create($validatedData);
         return redirect()->route('product.details');
     }


    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.details')->with('success', 'Product deleted successfully.');
    }


    public function showdetails(){
        $products = Product::all();
        return view('product.Carddetails',compact('products'));
    }

    public function giftcarddetails(){
        
        return view('product.giftcarddetails');
    }




    public function sub1(){
        return view('subcategory1');
    }

    public function store1(Request $request){

            // Validate the form input
            $validated = $request->validate([
                'Subcategoryname' => 'required|string|max:255',
                'Rate' => 'required|numeric',
            ]);
    
            // Create a new product
            $validated = Subcategory1::create([
                'Subcategoryname' => $validated['Subcategoryname'],
                'Rate' => $validated['Rate'],
            ]);
            return redirect()->route('sub.category1');

    }


    public function show_subcat1(){
        $categories= Subcategory1::all();
        return view('product.subdetails',['categories'=>$categories]);
    
    }




}
