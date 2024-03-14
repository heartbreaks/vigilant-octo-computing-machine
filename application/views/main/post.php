<a href="/"><- Домой</a>

<div class="mx-auto right-0 mt-2 w-60">
    <div class="bg-white rounded overflow-hidden shadow-lg">
        <div class="text-center p-6 bg-gray-800 border-b">
            (<img src="/public/materials/<?php echo $data['id'] ?>" role="img" class="h-24 w-24 text-white rounded-full mx-auto" width="32" height="32" />
            <p class="pt-2 text-lg font-semibold text-gray-50"><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></p>
            <p class="text-sm text-gray-100"><?php echo htmlspecialchars($data['email'], ENT_QUOTES); ?></p>
        </div>
        <div class="border-b">
            <Link href="/account/campaigns" >
            <a class="px-4 py-2 hover:bg-gray-100 flex">
                <div class="text-green-600">
                    <svg
                            fill="none"
                            stroke="currentColor"
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            strokeWidth="1"
                            viewBox="0 0 24 24"
                            class="w-5 h-5"
                    >
                        <path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <div class="pl-3">
                    <p class="text-xs text-gray-500"><?php echo htmlspecialchars($data['description']) ?></p>
                </div>
            </a>
            </Link>
        </div>

    </div>
</div>