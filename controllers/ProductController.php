<?php

/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{

    /**
     * Action для страницы просмотра товара
     * @param integer $productId <p>id товара</p>
     */
    public function actionView($productId)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Получаем инфомрацию о товаре
        $product = Product::getProductById($productId);

        // Список товаров для слайдера
        $latestProducts = Product::getLatestProducts(4);

        // Подключаем вид
        require_once(ROOT . '/views/product/product.php');
        return true;
    }

}
