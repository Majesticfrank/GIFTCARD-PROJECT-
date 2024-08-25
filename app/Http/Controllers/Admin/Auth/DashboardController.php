<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\product;
use App\Models\Subcategory1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $products;
    public function __construct(){
        $this->products = new product();
    }
    public function giftcard_view(){
        $products = Product::all(); 
        return view('product.Giftcard', compact('products'));
    }



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
        return redirect()->route('admin.giftcardmanagement');
    }

    public function createProduct(){
        return view('product.createGiftcard');
    }


    public function destroy_product($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.giftcardmanagement')->with('success', 'Product deleted successfully.');
    }



    public function show_subcat(){
        $categories= Subcategory1::all();
        return view('product.subcategory',['categories'=>$categories]);
    }

    public function create_subcategoryview(){
        return view('product.Createsubcatdetails1');
    }

    public function store_subcategory1(Request $request){

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
        return redirect()->route('create.subcategory');

}


}