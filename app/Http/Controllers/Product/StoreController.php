<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();

        // Загружаем изображение
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        // Получаем массивы ID
        $tagIds = $data['tags'] ?? [];
        $colorIds = $data['colors'] ?? [];

        // Убираем их из $data, чтобы они не попали в БД products
        unset($data['tags'], $data['colors']);

        // Создаём продукт
        $product = Product::create($data);

        // Привязываем теги и цвета
        $product->tags()->sync($tagIds);
        $product->colors()->sync($colorIds);

        return redirect()->route('product.index');
    }
}
