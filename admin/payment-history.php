<?php $pageTitle = "HousingQuest | Payment History"; ?>
<?php require_once("./includes/Header.php"); ?>

                <h3 class="header text-xl -mb-4">
                    Payment History
                </h3>

                <div class="space-y-8">
                    <form class="border border-slate-200 dark:border-slate-700 grid divide-y lg:divide-y-0 lg:divide-x divide-slate-200 dark:divide-slate-700 lg:grid-cols-5 items-center bg-white dark:bg-transparent" action="" method="POST">
                        <p class="px-4 hover:bg-slate-100 inline-block py-2 dark:hover:bg-slate-900">
                            <i class="fr fi-rr-filter relative top-0.5 pr-2"></i>
                            Filter By
                        </p>
                        <label class="bg-transparent" for="date-added">
                            <select class="form-select bg-transparent focus:bg-slate-100 dark:focus:bg-slate-900 border-none focus:ring-transparent w-full" name="date-added" id="date-added">
                                <option class="bg-white dark:bg-transparent" value="Date Added">Date Added</option>
                                <option class="bg-white dark:bg-transparent" value="Recently Added">Recently Added</option>
                                <option class="bg-white dark:bg-transparent" value="Older">Older</option>
                            </select>
                        </label>
                        <label class="bg-transparent" for="name-filter">
                            <select class="form-select bg-transparent focus:bg-slate-100 dark:focus:bg-slate-900 border-none focus:ring-transparent w-full" name="name-filter" id="name-filter">
                                <option class="bg-white dark:bg-transparent" value="Date Added">Name</option>
                                <option class="bg-white dark:bg-transparent" value="Ascending">Ascending</option>
                                <option class="bg-white dark:bg-transparent" value="Descending">Descending</option>
                            </select>
                        </label>
                        <label class="bg-transparent" for="price-filter">
                            <select class="form-select bg-transparent focus:bg-slate-100 dark:focus:bg-slate-900 border-none focus:ring-transparent w-full" name="price-filter" id="price-filter">
                                <option class="bg-white dark:bg-transparent" value="Date Added">Price</option>
                                <option class="bg-white dark:bg-transparent" value="Ascending">Ascending</option>
                                <option class="bg-white dark:bg-transparent" value="Descending">Descending</option>
                            </select>
                        </label>
                        <button class="text-rose-500 hover:bg-slate-100 py-2 dark:hover:bg-slate-900" type="submit">
                            <i class="fr fi-rr-refresh relative top-0.5 pr-2"></i>
                            Reset Filter
                        </button>
                    </form>

                    <div class="bg-white p-4 lg:p-8 rounded-xl dark:bg-slate-900 dark:text-slate-100 space-y-8">
                        <div class="overflow-x-auto">
                            <table class="w-full border-separate whitespace-nowrap table-auto mb-2">
                                <thead class="text-left border border-slate-600">
                                    <tr class="text-sm">
                                        <th class="py-4 px-4 border border-slate-600 header">
                                            Buyer's Name
                                        </th>
                                        <th class="py-4 px-4 border border-slate-600 header">
                                            Payment Date
                                        </th>
                                        <th class="py-4 px-4 border border-slate-600 header">
                                            Property Amount
                                        </th>
                                        <th class="py-4 px-4 border border-slate-600 header">
                                            Property ID
                                        </th>
                                        <th class="py-4 px-4 border border-slate-600 header">
                                            Status
                                        </th>
                                        <th class="py-4 px-4 border border-slate-600 header">
                                            Action
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="odd:bg-white even:bg-slate-50 hover:bg-slate-50 dark:odd:bg-slate-700 dark:even:bg-slate-800 dark:hover:bg-slate-800">
                                        <td class="py-2 px-4 border border-slate-600">
                                            Quincy Otoku
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600">
                                            15 June, 2022
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600">
                                            ??? 200, 000
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600">
                                            50
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600 text-green-500">
                                            Paid
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600 text-sky-500 hover:text-sky-600">
                                            <a href="/admin/view-invoice">
                                                View Invoice
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="odd:bg-white even:bg-slate-50 hover:bg-slate-50 dark:odd:bg-slate-700 dark:even:bg-slate-800 dark:hover:bg-slate-800">
                                        <td class="py-2 px-4 border border-slate-600">
                                            Rex Kudo
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600">
                                            15 June, 2022
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600">
                                            ??? 200, 000
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600">
                                            23
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600 text-amber-500">
                                            Pending
                                        </td>
                                        <td class="py-2 px-4 border border-slate-600 text-sky-500 hover:text-sky-600">
                                            <a href="/admin/view-invoice">
                                                View Invoice
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    <?php require_once("./includes/Footer.php"); ?>