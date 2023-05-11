<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body>
    <div class="grid min-h-screen place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
            <h1 class="text-xl font-semibold">Form Categories</h1>
            <form method="post" action="createCategories.php" class="mt-10">
                <div class="flex justify-between gap-3 mt-10">
                    <span class="w-1/2">
                        <label for="id" class="block text-xs font-semibold text-gray-600 uppercase">id</label>
                        <input id="id" type="text" name="id" autocomplete="given-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>
                    <span class="w-1/2">
                        <label for="nama" class="block text-xs font-semibold text-gray-600 uppercase">Nama</label>
                        <input id="nama" type="text" name="nama" autocomplete="family-name"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>
                </div>
            </form>
            <h1 class="text-xl font-semibold mt-10">Form Products</h1>
            <form method="post" action="createProducts.php" class="mt-10">
                <span>
                    <label for="id" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Id</label>
                    <input id="id" type="id" name="id" autocomplete="id"
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />
                </span>
                <span>
                    <label for="nama" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nama</label>
                    <input id="nama" type="nama" name="nama" autocomplete="nama"
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />
                </span>
                <span>
                    <label for="category_id" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">
                        Category_id</label>
                    <input id="category_id" type="Category_id" name="category_id" autocomplete="category_id"
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />
                </span>
                <span>
                    <label for="description"
                        class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Description</label>
                    <input id="description" type="description" name="description" autocomplete="description"
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />
                </span>
                <span>
                    <label for="status" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Status</label>
                    <td>
                        <select name="status" id="status" class="border">
                            <option value="accepted">accepted</option>
                            <option value="rejected">rejected</option>
                            <option value="waiting">waiting</option>
                        </select>
                    <td>
                </span>
                <span>
                    <label for="price" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Price</label>
                    <input id="price" type="price" name="price" autocomplete="price"
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />
                </span>
                <button type="submit"
                    class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none"
                    value="Simpan">
                    Done
                </button>
                <p class="flex justify-between mt-4 text-xs text-gray-500 cursor-pointer hover:text-black">

            </form>
        </div>
    </div>
</body>

</html>