<?php require __DIR__.'/partials/header.html.php'; ?>

    <div class="max-w-5xl mx-auto px-3">
        <h1 class="text-center text-2xl mb-4">Panier</h1>

        <div class="shadow-lg border rounded-lg p-3">
            <?php if (empty($cart->items)) { ?>
                <h2 class="text-center text-2xl mb-4">Votre panier est vide</h2>
            <?php } ?>

            <?php foreach ($cart->items as $item) { ?>
                <div class="flex items-center border-b mb-3 pb-3">
                    <img class="rounded-lg w-24 mr-4" src="<?= $item['book']->image(); ?>" alt="<?= $item['book']->title; ?>">

                    <div>
                        <h2 class="text-lg"><?= $item['book']->title; ?></h2>
                        <p class="text-2xl font-bold"><?= $item['book']->price(); ?> €</p>
                    </div>

                    <div class="flex-grow text-right font-bold">
                        <p>x <span class="text-2xl"><?= $item['quantity']; ?></span></p>
                        <p class="text-3xl"><?= $cart->price($item); ?> €</p>
                    </div>

                    <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 ml-8" href="<?= BASE_URL; ?>/cart/<?= $item['book']->id; ?>/delete">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </a>
                </div>
            <?php } ?>

            <div class="flex items-center border-b mb-3 pb-3">
                <div class="flex-grow text-right font-bold">
                    <p class="text-2xl">Total</p>
                    <p class="text-3xl"><?= $total; ?> €</p>
                </div>
            </div>
        </div>

        <?php if (! empty($cart->items)) { ?>
        <div class="text-center mt-12">
            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200" href="<?= BASE_URL; ?>">
                Commander
            </a>
        </div>
        <?php } ?>
    </div>

<?php require __DIR__.'/partials/footer.html.php'; ?>
