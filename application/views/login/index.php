<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-md mx-auto p-2">
        <div class="mt-10 space-y-6 p-6 border rounded-md shadow-md border border-gray-200">
            <div>
                <h2 class="text-center text-2xl font-semibold">Login</h2>
            </div>
            <?php
            if (validation_errors()) {
                echo validation_errors();
            }
            ?>
            <form class="space-y-4" action="<?= site_url('login/login') ?> " method="post">
                <div class="flex flex-col gap-2">
                    <label for="user_id" class="font-semibold">Employee Number</label>
                    <input id="user_id" placeholder="opc-0000-0001" name="user_id" class="rounded-md border border-gray-200 p-2" />
                </div>
                <div class="flex flex-col gap-2">
                    <label for="pword" class="font-semibold">Password</label>
                    <input id="pword" placeholder="abc123^&*" name="pword" type="password" class="rounded-md border border-gray-200 p-2" />
                </div>
                <div class="pt-10">
                    <button class="w-full bg-blue-500 hover:bg-blue-400 text-white p-2 rounded-md shadow-md">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>