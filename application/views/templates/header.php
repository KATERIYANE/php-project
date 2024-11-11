<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    if ($this->session->userdata('usr_info')) {
        $user = $this->session->userdata('usr_info');
    }
    ?>

    <div class="flex gap-2 items-center justify-end p-2">
        <p class="font-semibold">Welcome, <?= $user->user_id ?>!</p>
        <a class="bg-red-500 hover:bg-red-400 text-white font-semibold p-2 rounded-md" href="<?= site_url('login/logout') ?>">Logout</a>
    </div>

    <div class="max-w-2xl mx-auto p-2">
        <div class="flex flex-col gap-4">
            <div>
                <h2 class="text-2xl font-semibold text-center"> Upcount Information System </h2>
                <div class="flex items-center justify-center">
                    <div class="flex gap-4 text-blue-500 font-semibold">
                        <a class="hover:underline" href="<?= site_url('Dashboard') ?>">Home</a>
                        <a class="hover:underline" href="<?= site_url('grant_access/index') ?>">Grant Access</a>
                        <a class="hover:underline" href="">Employees</a>
                    </div>
                </div>
            </div>