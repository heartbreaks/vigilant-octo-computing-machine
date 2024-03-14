<div class="min-h-screen grid items-center justify-center">
    <div>
        <h5>Информаци о пользователе</h5>
        <a href="/"><- Домой</a>
        <div class="p-6 bg-white flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
            <div>
                <img class="w-8 h-8 rounded-full" src="/public/materials/<?php echo $val['id']; ?>.jpg')" alt="Neil image">

            </div>
            <div>
                <h1 class="text-xl font-bold text-gray-700 mb-2"><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h1>
                <p class="text-gray-600 w-80 text-sm"><?php echo htmlspecialchars($data['email'], ENT_QUOTES); ?></p>
            </div>
        </div>
    </div>

</div>