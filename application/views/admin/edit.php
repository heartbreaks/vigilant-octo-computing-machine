<!--<h1>--><?php //echo $title; ?><!--</h1>-->
<!--<form class="w-50" action="/admin/edit/--><?php //echo $data['id']; ?><!--" method="post" >-->
<!--    <div class="form-group">-->
<!--        <label>Название</label>-->
<!--        <input class="form-control" type="text" value="--><?php //echo htmlspecialchars($data['name'], ENT_QUOTES); ?><!--" name="name">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>email</label>-->
<!--        <input class="form-control" type="email" value="--><?php //echo htmlspecialchars($data['email'], ENT_QUOTES); ?><!--" name="email">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Текст</label>-->
<!--        <textarea class="form-control" rows="3" name="description">--><?php //echo htmlspecialchars($data['description'], ENT_QUOTES); ?><!--</textarea>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Изображение</label>-->
<!--        <input class="form-control" type="file" name="img">-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-primary btn-block">Сохранить</button>-->
<!--</form>-->


<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px]">
        <form action="/admin/edit/<?php echo $data['id']; ?>" method="post" >
            <div class="mb-5">
                <label
                        for="name"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Имя
                </label>
                <input
                        type="text"
                        name="name"
                        id="name"
                        value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>"
                        placeholder="Петрович"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
            </div>
            <div class="mb-5">
                <label
                        for="email"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Email
                </label>
                <input
                        type="email"
                        name="email"
                        value="<?php echo htmlspecialchars($data['email'], ENT_QUOTES); ?>"
                        id="email"
                        placeholder="example@domain.com"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
            </div>
            <div class="mb-5">
                <label
                        for="subject"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Изображение
                </label>
                <input class="form-control" type="file" name="img">
            </div>
            <div class="mb-5">
                <label
                        for="message"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Описание
                </label>
                <textarea
                        rows="4"
                        name="description"
                        id="message"
                        placeholder="Введите описание"
                        class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                ><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></textarea>
            </div>
            <div>
                <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
                >
                    Сохранить
                </button>
            </div>
        </form>
    </div>
</div>