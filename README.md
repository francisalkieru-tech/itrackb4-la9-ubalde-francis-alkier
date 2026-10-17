F1. Which column did you make nullable, and why that one and not another?
Answer: In the description the nullable column because every product in my list is have a name, price, stock, category, and availability and not every product needs an extra notes, like in the product Pancit Canton this is already clear without a description, so its good to leave it empty. The other columns are needed for the list page and the filters to work.

F2. Which step failed first for you, and what did the error say?
Answer: The first thing that failed was creating a product in tinker before I added $fillable to my product model. It threw a MassAssignmentException that said Illuminate\Database\Eloquent\MassAssignmentException  Add [name] to fillable property to allow mass assignment on [App\Models\Product]. the laravel laravel telling the blocks filling columns in bulk unless I list them in $fillable, so I added all my columns there before running the php artisan tinker again.

F3. You changed no Blade file in Part D, yet your pages still work. Why not?
My Blade files still work because my controller still passes the same variable names $products and $product to the same views. before they got the data from my JSON file and now they get it from the database through Product::all() and Product::findOrFail($id). eloquent models can be read like $product['name'] so the views don't know or care that the data now comes from a table.
