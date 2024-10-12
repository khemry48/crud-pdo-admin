<?php

include_once('connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin</title>
</head>

<body class="bg-white">

    <nav class="border-b-2 border-[#373737] bg-[#c7c7c7]">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-black">Admin</span>
            </a>
        </div>
    </nav>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-lg text-gray-900 uppercase border-b border-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-b border-gray-400">
                        ลำดับ
                    </th>
                    <th scope="col" class="px-6 py-3 border-b border-gray-400">
                        ชื่อจริง
                    </th>
                    <th scope="col" class="px-6 py-3 border-b border-gray-400">
                        นามสกุล
                    </th>
                    <th scope="col" class="px-6 py-3 border-b border-gray-400">
                        เบอร์โทรศัพท์
                    </th>
                    <th scope="col" class="px-6 py-3 border-b border-gray-400">
                        จัดการ
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $users = query("SELECT * FROM users")->fetchAll();
                    foreach ($users as $key => $val) {
                ?>
                    <tr class="border-b border-gray-400 text-gray-900">
                        
                        <td class="px-6 py-4 border-b border-gray-400">
                            <?= $key + 1 ?>
                        </td>

                        <td class="px-6 py-4 border-b border-gray-400">
                            <?= $val['firstname'] ?>
                        </td>
                        
                        <td class="px-6 py-4 border-b border-gray-400">
                            <?= $val['lastname'] ?>
                        </td>

                        <td class="px-6 py-4 border-b border-gray-400">
                            <?= $val['phone'] ?>
                        </td>
                        <td class="py-4 border-b border-gray-400">
                            <div class="space-x-1">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    แก้ไข
                                </button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    ลบ
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>




</body>

</html>