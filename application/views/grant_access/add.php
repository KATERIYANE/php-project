<div class="max-w-lg mx-[100px]">
    <div class="mt-10 space-y-6 p-6 border rounded-md shadow-md border border-gray-200">
        <form class="space-y-4" action="<?= site_url('Grant_access/add') ?> " method="post">
            <?php
            if (validation_errors()) {
                echo validation_errors();
            }
            ?>
            <div>
                <label for="">Employee No.*</label>
                <input placeholder="opc-0000-0001" class="w-full rounded-md border border-gray-200 p-2" type="text" name="user_id" id="">
            </div>
            <div>
                <label for="">Position</label>
                <select name="position" id="" class="w-full rounded-md border border-gray-200 p-2">
                    <option value="select">select</option>
                    <option value="Accountant">Accountant</option>
                    <option value="Call Center Agent">Call Center Agent</option>
                    <option value="Sales Agent">Sales Agent</option>
                </select>
            </div>
            <div class="pt-10">
                <button class="w-full bg-blue-500 text-white font-semibold rounded-md shadow-md p-2" type="submit">Grant Access</button>
            </div>
        </form>
    </div>
</div>