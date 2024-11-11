<div class="space-y-6 pt-10">
    <a class="bg-blue-500 text-white font-semibold p-2 rounded-md shadow-md" href="<?= site_url('Grant_access/add') ?>">Grant an Access</a>

    <div class="space-y-4">
        <?php
        if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        }
        ?>


        <div class="shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Employee
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Department
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $u):
                    ?>
                        <!-- <tr>
                            <td><?= $u->user_id; ?></td>
                            <td><?= $u->position; ?></td>
                            <td>
                                <a href="<?= site_url('Grant_access/update/' . $u->id) ?>">Edit</a> | <a href="">Delete</a>
                            </td>
                        </tr> -->
                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <?= $u->user_id; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $u->position; ?>
                            </td>
                            <td class="px-6 py-4">
                                <a class="font-medium text-blue-600 hover:underline" href="<?= site_url('Grant_access/update/' . $u->id) ?>">Edit</a> | <a href="">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>