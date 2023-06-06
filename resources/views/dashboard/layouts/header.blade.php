<header class="top-0 left-0 absolute w-full flex items-center z-10">
    <div class="w-full bg-cyan-800">
        <!-- Logo & Tittle Start-->
        <div class="flex items-center relative justify-between">
            <div class="flex items-center px-4 max-w-[250px] w-full">
                <a href="#" class="flex font-bold text-lg py-3">
                    <div
                        class="flex mx-2 items-center w-[30px] h-[30px] rounded-full bg-white border border-slate-200 drop-shadow-xl shadow-inner">
                        <img class="w-[26px] h-[26px] flex m-auto" src="/img/logo-vista-media.png" alt="">
                    </div>
                    <span class="text-white mx-1">Vista</span>
                    <span class="text-red-500 mx-1">Media</span>
                </a>
            </div>
            <!-- Logo & Tittle End-->
            <!-- Hamburger Menu Start-->
            <div class="flex justify-start items-center px-4 w-full">
                <button class="md:hidden lg:hidden xl:hidden" id="hamburger" name="hamburger" type="button">
                    <span id="line-t" name="line-t"
                        class="origin-top-left w-[30px] h-[2px] my-2 block bg-white transition duration-300 ease-in-out"></span>
                    <span id="line-m" name="line-m"
                        class="w-[30px] h-[2px] my-2 block bg-white transition duration-300 ease-in-out"></span>
                    <span id="line-b" name="line-b"
                        class="origin-bottom-left w-[30px] h-[2px] my-2 block bg-white transition duration-300 ease-in-out"></span>
                </button>
                <nav class="md:flex lg:flex xl:flex w-full hidden">
                    <ul class="flex justify-start group w-24 h-6">
                        <a class="flex items-center font-medium text-sm mx-2 group-hover:text-emerald-200 text-white {{ Request::is('dashboard') ? 'active' : '' }}"
                            href="/dashboard">
                            <svg class="flex fill-current mr-2 w-4" role="img" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>DASHBOARD</title>
                                <path
                                    d="M11.9922 1.3945a.7041.7041 0 00-.498.211L.1621 13.0977A.5634.5634 0 000 13.494a.567.567 0 00.5664.5664H2.67v8.0743c0 .2603.2104.4707.4707.4707h7.9473v-3.6836L8.037 15.8672a2.42 2.42 0 01-.9473.1933c-1.3379 0-2.4218-1.0868-2.4218-2.4257 0-1.339 1.084-2.4239 2.4218-2.4239 1.338 0 2.422 1.085 2.422 2.4239 0 .3359-.068.6563-.1915.9472l1.7676 1.7676v-5.375C10.2 10.615 9.5723 9.744 9.5723 8.7266c0-1.339 1.0859-2.4258 2.4238-2.4258 1.338 0 2.4219 1.0868 2.4219 2.4258 0 1.0174-.6259 1.8884-1.5137 2.248v5.375l1.7656-1.7676a2.4205 2.4205 0 01-.1914-.9472c0-1.339 1.086-2.4239 2.4238-2.4239 1.338 0 2.422 1.085 2.422 2.4239 0 1.3389-1.084 2.4257-2.422 2.4257a2.42 2.42 0 01-.9472-.1933l-3.0508 3.0547v3.6836h7.9473a.4702.4702 0 00.4707-.4707v-8.0743h2.1113a.5686.5686 0 00.3965-.162c.2233-.2185.2262-.5775.0078-.8008l-2.5156-2.5723V6.4707c0-.2603-.2104-.4727-.4707-.4727h-1.9649c-.2603 0-.4707.2124-.4707.4727v1.1035L12.5 1.6035a.7056.7056 0 00-.5078-.209zm.0039 6.3614c-.5352 0-.9688.4351-.9688.9707 0 .5355.4336.9687.9688.9687a.9683.9683 0 00.9687-.9687c0-.5356-.4335-.9707-.9687-.9707zM7.0898 12.666a.9683.9683 0 00-.9687.9688c0 .5355.4336.9707.9687.9707.5352 0 .9688-.4352.9688-.9707a.9683.9683 0 00-.9688-.9688zm9.8125 0c-.5351 0-.9707.4332-.9707.9688 0 .5355.4356.9707.9707.9707.5352 0 .9688-.4352.9688-.9707a.9683.9683 0 00-.9688-.9688Z" />
                            </svg>
                            <span class="flex w-40"> Dashboard </span>
                        </a>
                    </ul>
                    <ul class="flex justify-start group w-24 h-6 ml-4">
                        <a class="flex items-center font-medium text-sm mx-2 group-hover:text-emerald-200 text-white {{ Request::is('dashboard/media/billboards*') ? 'active' : '' }}"
                            href="/dashboard/media/billboards">
                            <svg class="flex fill-current mr-2 w-4" xmlns="http://www.w3.org/2000/svg" role="img"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 2c-1.229 0-2.18-1.084-3-2h-8c-.82.916-1.771 2-3 2h-3v22h20v-22h-3zm-7 0c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm8 20h-3.824c1.377-1.103 2.751-2.51 3.824-3.865v3.865zm0-8.457c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-18h4l2.102 2h3.898l2-2h4v9.543z" />
                            </svg>
                            <span class="flex w-40"> Billboard </span>
                        </a>
                    </ul>
                    <ul class="flex justify-start group w-24 ml-4 h-6">
                        <a class="flex items-center font-medium text-sm mx-2 group-hover:text-emerald-200 text-white {{ Request::is('dashboard/media/videotron*') ? 'active' : '' }}"
                            href="/dashboard/media/videotrons">
                            <svg class="flex fill-current mr-2 w-4" xmlns="http://www.w3.org/2000/svg" role="img"
                                viewBox="0 0 24 24">
                                <path
                                    d="M2 0c-1.104 0-2 .896-2 2v15c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2v-15c0-1.104-.896-2-2-2h-20zm20 14h-20v-12h20v12zm-6.599 7c0 1.6 1.744 2.625 2.599 3h-12c.938-.333 2.599-1.317 2.599-3h6.802z" />
                            </svg>
                            <span class="flex w-40"> Videotron </span>
                        </a>
                    </ul>
                    <ul class="flex group w-24 ml-4 h-6">
                        <a class="flex items-center font-medium text-sm mx-2 group-hover:text-emerald-200 text-white {{ Request::is('dashboard/media/signages*') ? 'active' : '' }}"
                            href="/dashboard/media/signages">
                            <svg class="flex fill-current mr-2 w-4 rotate-90" xmlns="http://www.w3.org/2000/svg"
                                role="img" viewBox="0 0 24 24">
                                <path
                                    d="M21.5 6c.276 0 .5.224.5.5v11c0 .276-.224.5-.5.5h-19c-.276 0-.5-.224-.5-.5v-11c0-.276.224-.5.5-.5h19zm2.5 0c0-1.104-.896-2-2-2h-20c-1.105 0-2 .896-2 2v12c0 1.104.895 2 2 2h20c1.104 0 2-.896 2-2v-12zm-14.11 5c.098 0 .174.04.232.116.79 1.085 1.33 2.237 1.616 3.455h-1.991c-.38-1.313-.924-2.429-1.638-3.344l-.029-.085c-.001-.073.058-.142.145-.142h1.665zm2.495 1.594c-.147.594-.33 1.179-.558 1.754-.237-.924-.616-1.808-1.143-2.652.121-.656.183-1.326.196-2.004.63 1.013 1.13 1.978 1.505 2.902zm.442-3.165c1.364 1.877 2.334 4.187 2.54 6.571h-2.013c-.121-1.978-.946-4.17-2.469-6.571h1.942zm3.094 2.571c0 1.263-.152 2.469-.451 3.625-.201-1.665-.732-3.277-1.603-4.835-.076-.897-.232-1.763-.473-2.607-.022-.094.045-.183.139-.183h1.603c.125 0 .241.085.272.205.343 1.219.513 2.482.513 3.795z" />
                            </svg>
                            <span class="flex w-40"> Signage </span>
                        </a>
                    </ul>
                    <ul id="setting" name="setting" class="flex w-24 ml-4 h-6">
                        <div class="flex group">
                            <a class="flex items-center font-medium text-sm mx-2 group-hover:text-emerald-200 text-white"
                                href="#">
                                <Span class="flex ml-2">Pengaturan</Span>
                                <svg name="settingArrow" id="settingArrow"
                                    class="ml-1 fill-current transition duration-300 ease-in-out" role="img"
                                    width="20" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                    stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m16.843 10.211c.108-.141.157-.3.157-.456 0-.389-.306-.755-.749-.755h-8.501c-.445 0-.75.367-.75.755 0 .157.05.316.159.457 1.203 1.554 3.252 4.199 4.258 5.498.142.184.36.29.592.29.23 0 .449-.107.591-.291 1.002-1.299 3.044-3.945 4.243-5.498z" />
                                </svg>
                            </a>
                        </div>
                    </ul>
                    <div class="absolute ml-[450px] items-center transition duration-500 ease-in-out mt-4 hidden"
                        id="settingChild" name="settingChild">
                        <div
                            class="flex absolute w-32 h-32 top-6 mr-6 bg-emerald-50 rounded-b-xl border drop-shadow-md">
                            <nav class="flex absolute top-0 w-36 mr-10">
                                <ul class="ml-4 text-left">
                                    @canany(['isAdmin', 'isAccounting', 'isMarketing', 'isWorkshop', 'isOwner',
                                        'isMedia'])
                                        <li class="group">
                                            <a class="flex items-center text-base text-slate-700 py-1 group-hover:text-emerald-600"
                                                href="/dashboard/media/area">
                                                <svg class="flex fill-current mr-2 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    role="img" viewBox="0 0 24 24">
                                                    <path
                                                        d="M13.144 8.171c-.035-.066.342-.102.409-.102.074.009-.196.452-.409.102zm-.461 15.795c-.228.013-.453.034-.683.034-6.628 0-12-5.373-12-12s5.372-12 12-12c6.627 0 12 5.373 12 12 0 .23-.021.455-.034.682-.582-.652-1.266-1.209-2.031-1.643-.064-.679-.182-1.293-.306-1.671-.058-.174-.189-.312-.359-.378-.256-.1-1.337.597-1.5.254-.107-.229-.324.146-.572.008-.12-.066-.454-.515-.605-.46-.309.111.474.964.688 1.076.201-.152.852-.465.992-.038.056.166.047.335.009.504-.725-.215-1.489-.334-2.282-.334-2.885 0-5.69 1.602-7.103 4.328-.126.058-.25.121-.381.161-.346.104-.7-.082-1.042-.125-1.407-.178-1.866-1.786-1.499-2.946.037-.19-.114-.542-.048-.689.158-.352.48-.747.762-1.014.158-.15.361-.112.547-.229.287-.181.291-.553.572-.781.4-.325.946-.318 1.468-.388.278-.037 1.336-.266 1.503-.06 0 .038.191.604-.019.572.433.023 1.05.749 1.461.579.211-.088.134-.736.567-.423.262.188 1.436.272 1.68.069.15-.124.234-.93.052-1.021.116.115-.611.124-.679.098-.12-.044-.232.114-.425.025.116.055-.646-.354-.218-.667-.179.131-.346-.037-.539.107-.133.108.062.18-.128.274-.302.153-.53-.525-.644-.602-.116-.076-1.014-.706-.77-.295l.789.785c-.039.025-.207-.286-.207-.059.053-.135.02.579-.104.347-.055-.089.09-.139.006-.268 0-.085-.228-.168-.272-.226-.125-.155-.457-.497-.637-.579-.05-.023-.764.087-.824.11-.07.098-.13.201-.179.311-.148.055-.287.126-.419.214l-.157.353c-.068.061-.765.291-.769.3.029-.075-.487-.171-.453-.321.038-.165.213-.68.168-.868-.048-.197 1.074.284 1.146-.235.029-.225.046-.487-.313-.525.068.008.695-.246.799-.36.146-.168.481-.442.724-.442.284 0 .223-.413.354-.615.131.053-.07.376.087.507-.01-.103.445.057.489.033.105-.055.685-.023.595-.295-.1-.277.051-.195.181-.253-.02.008.245-.454.359-.452-.103-.088-.395.111-.51.102-.305-.024-.176-.52-.061-.665.089-.115-.243-.256-.247-.036-.006.329-.312.627-.241 1.064.108.659-.735-.159-.809-.114-.28.17-.509-.214-.364-.444.148-.235.505-.224.652-.476.104-.178.225-.385.385-.52.535-.449.683-.09 1.216-.041.521.048.176.124.104.324-.069.19.286.258.409.099.07-.092.229-.323.298-.494.089-.222.901-.197.334-.536-.374-.223-2.004-.672-3.096-.672-.236 0-.401.263-.581.412-.356.295-1.268.874-1.775.698-.519-.179-1.63.66-1.808.666-.065.004.004-.634.358-.681-.153.023 1.247-.707 1.209-.859-.046-.18-2.799.822-2.676 1.023.059.092.299.092-.016.294-.18.109-.372.801-.541.801-.505.221-.537-.435-1.099.409l-.894.36c-1.328 1.411-2.247 3.198-2.58 5.183-.013.079.334.226.379.28.112.134.112.712.167.901.138.478.479.744.74 1.179.154.259.41.914.329 1.186.108-.178 1.07.815 1.246 1.022.414.487.733 1.077.061 1.559-.217.156.33 1.129.048 1.368l-.361.093c-.356.219-.195.756.021.982 1.611 1.686 3.809 2.804 6.265 3.037.434.764.989 1.446 1.641 2.027zm3.007-17.337c-.006-.146-.19-.284-.382-.031-.135.174-.111.439-.184.557-.104.175.567.339.567.174.025-.277.732-.063.87-.025.248.069.643-.226.211-.381-.355-.13-.542-.269-.574-.523 0 0 .188-.176.106-.166-.218.027-.614.786-.614.395zm-5.299-1.089c-.084.085.003.14.089.103.125-.055.293-.053.311-.22.015-.148.044-.046.08-.1.035-.053-.067-.138-.11-.146-.064-.014-.108.069-.149.104l-.072.019-.068.087.008.048-.089.105zm.475.344c.096.136.824-.195.708-.176.225-.113.029-.125-.097-.19-.043-.215-.079-.547-.213-.68l.088-.102c-.207-.299-.36.362-.36.362l.108-.031c.064.055-.072.095-.051.136.086.155.021.248.008.332-.014.085-.104.048-.149.093-.053.066.258.075.262.085.011.033-.375.089-.304.171zm13.134 12.116c0 3.313-2.687 6-6 6s-6-2.687-6-6 2.687-6 6-6 6 2.687 6 6zm-3.5-2.5l-6 2.25 3 .75.754 3 2.246-6z" />
                                                </svg>
                                                <span class="flex w-40"> Area </span>
                                            </a>
                                        </li>
                                        <li class="group">
                                            <a class="flex items-center text-base text-slate-700 py-1 group-hover:text-emerald-600"
                                                href="/dashboard/media/cities">
                                                <svg class="flex fill-current mr-2 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    role="img" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 0c-3.148 0-6 2.553-6 5.702 0 4.682 4.783 5.177 6 12.298 1.217-7.121 6-7.616 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 16l-6.707-2.427-5.293 2.427-5.581-2.427-6.419 2.427 4-9 3.96-1.584c.38.516.741 1.08 1.061 1.729l-3.523 1.41-1.725 3.88 2.672-1.01 1.506-2.687-.635 3.044 4.189 1.789.495-2.021.465 2.024 4.15-1.89-.618-3.033 1.572 2.896 2.732.989-1.739-3.978-3.581-1.415c.319-.65.681-1.215 1.062-1.731l4.021 1.588 3.936 9z" />
                                                </svg>
                                                <span class="flex w-40"> Kota </span>
                                            </a>
                                        </li>
                                        <li class="group">
                                            <a class="flex items-center text-base text-slate-700 py-1 group-hover:text-emerald-600"
                                                href="/dashboard/media/sizes">
                                                <svg class="flex fill-current mr-2 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    role="img" viewBox="0 0 24 24">
                                                    <path
                                                        d="m22 5c0-.478-.379-1-1-1h-18c-.62 0-1 .519-1 1v14c0 .621.52 1 1 1h18c.478 0 1-.379 1-1zm-7.565 3.522h-1.218c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h3.033c.414 0 .75.336.75.75v3.05c0 .414-.336.75-.75.75s-.75-.336-.75-.75v-1.244l-5.918 5.922h1.219c.414 0 .75.336.75.75s-.336.75-.75.75c-.715 0-2.319 0-3.033 0-.415 0-.75-.336-.75-.75 0-.715 0-2.335 0-3.05 0-.414.335-.75.75-.75.414 0 .75.336.75.75v1.243z"
                                                        fill-rule="nonzero" />
                                                </svg>
                                                <span class="flex w-40"> Ukuran </span>
                                            </a>
                                        </li>
                                        <li class="group">
                                            <a class="flex items-center text-base text-slate-700 py-1 group-hover:text-emerald-600"
                                                href="/dashboard/users/users">
                                                <svg class="flex fill-current mr-2 w-4" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path
                                                        d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z" />
                                                </svg>
                                                <span class="flex w-40"> User </span>
                                            </a>
                                        </li>
                                    @endcanany
                                </ul>
                            </nav>
                        </div>
                    </div>
                </nav>

                <!-- Hamburger Menu End-->
                <!-- Right Nav Start-->
                <div class="flex px-4 w-full  text-end py-3 items-center text-white justify-end">
                    <div class="group">
                        <a href="#"
                            class="flex items-center font-medium text-sm mx-2 group-hover:text-emerald-200">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20"
                                viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z" />
                                <path
                                    d="M18 16v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.68-1.5-1.51-1.5S10.5 3.17 10.5 4v.68C7.63 5.36 6 7.92 6 11v5l-1.3 1.29c-.63.63-.19 1.71.7 1.71h13.17c.89 0 1.34-1.08.71-1.71L18 16zm-6.01 6c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zM6.77 4.73c.42-.38.43-1.03.03-1.43-.38-.38-1-.39-1.39-.02C3.7 4.84 2.52 6.96 2.14 9.34c-.09.61.38 1.16 1 1.16.48 0 .9-.35.98-.83.3-1.94 1.26-3.67 2.65-4.94zM18.6 3.28c-.4-.37-1.02-.36-1.4.02-.4.4-.38 1.04.03 1.42 1.38 1.27 2.35 3 2.65 4.94.07.48.49.83.98.83.61 0 1.09-.55.99-1.16-.38-2.37-1.55-4.48-3.25-6.05z" />
                            </svg>
                        </a>
                    </div>
                    <div class="group">
                        <a href="#"
                            class="flex items-center font-medium text-sm mx-2 group-hover:text-emerald-200">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                viewBox="0 0 64 64">
                                <circle cx="16" cy="31.58" r="1" />
                                <path
                                    d="M45.75,19H10.32A5.3,5.3,0,0,0,5,24.26V38.74c0,2.37,2.75,4.17,4,4.87v7.06a1,1,0,0,0,1,1,1,1,0,0,0,.71-.3L18.07,44H45.75A5.26,5.26,0,0,0,51,38.74V24.46A5.28,5.28,0,0,0,45.75,19ZM13,31.58a3,3,0,1,1,3,3A3,3,0,0,1,13,31.58Zm8,0a3,3,0,1,1,3,3A3,3,0,0,1,21,31.58Zm8,0a3,3,0,1,1,3,3A3,3,0,0,1,29,31.58Zm11,3a3,3,0,1,1,3-3A3,3,0,0,1,40,34.58Z" />
                                <circle cx="40" cy="31.58" r="1" />
                                <circle cx="32" cy="31.58" r="1" />
                                <circle cx="24" cy="31.58" r="1" />
                                <path
                                    d="M53.74,13h-34a5.1,5.1,0,0,0-5,4h31A7.27,7.27,0,0,1,53,24.25V38h.75A5.25,5.25,0,0,0,59,32.75V18.26A5.25,5.25,0,0,0,53.74,13Z" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <div class="group" id="profile" name="profile">
                            <a href="#"
                                class="flex items-center font-medium text-sm mx-2 group-hover:text-emerald-200">
                                @if (auth()->user()->avatar)
                                    <img class="m-auto flex rounded-full items-center w-8 h-8"
                                        src="{{ asset('storage/' . auth()->user()->avatar) }}">
                                @else
                                    <img class="m-auto flex rounded-full items-center w-8 h-8"
                                        src="/img/photo_profile.png">
                                @endif
                                <Span class="hidden sm:flex ml-2">{{ auth()->user()->name }}</Span>
                                <svg name="profileArrow" id="profileArrow"
                                    class="ml-1 fill-current transition duration-300 ease-in-out" role="img"
                                    width="20" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                    stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m16.843 10.211c.108-.141.157-.3.157-.456 0-.389-.306-.755-.749-.755h-8.501c-.445 0-.75.367-.75.755 0 .157.05.316.159.457 1.203 1.554 3.252 4.199 4.258 5.498.142.184.36.29.592.29.23 0 .449-.107.591-.291 1.002-1.299 3.044-3.945 4.243-5.498z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Right Nav End-->
            </div>
        </div>

        <div class="absolute justify-end w-full items-center transition duration-500 ease-in-out origin-center hidden"
            id="profileChild" name="profileChild">
            <div
                class="flex absolute bg-opacity-90 bg-emerald-50 w-32 h-28 top-0 rounded-b-xl border drop-shadow-md mr-6">
                <nav class="flex absolute top-0 w-36 mr-10">
                    <ul class="ml-4 text-left">
                        @canany(['isAdmin', 'isAccounting', 'isMarketing', 'isWorkshop', 'isOwner', 'isMedia'])
                            <li class="group">
                                <a class="mt-0 flex items-center text-base text-slate-700 py-1 group-hover:text-emerald-600"
                                    href="/dashboard/users/users/{{ auth()->user()->id }}">
                                    <svg class="fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                        width="16" viewBox="0 0 24 24">
                                        <title>My Profile</title>
                                        <path
                                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z" />
                                    </svg>
                                    <span class="ml-1 sm:hidden"> P </span>
                                    <span class="ml-1 hidden sm:flex"> My Profile</span>
                                </a>
                            </li>
                            <li class="group">
                                <a class="mt-2 flex items-center text-base text-slate-700 py-1 group-hover:text-emerald-600"
                                    href="/dashboard/notifications">
                                    <svg class="fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="24" viewBox="0 0 24 24">
                                        <title>Notifikasi</title>
                                        <path
                                            d="M12 .02c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.99 6.98l-6.99 5.666-6.991-5.666h13.981zm.01 10h-14v-8.505l7 5.673 7-5.672v8.504z" />
                                    </svg>
                                    <span class="ml-1 sm:hidden"> N </span>
                                    <span class="ml-1 hidden sm:flex"> Notifikasi</span>
                                </a>
                            </li>
                        @endcanany
                        <li class="group">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit"
                                    class="mt-2 flex items-center text-base text-slate-700 py-1 group-hover:text-emerald-600">
                                    <svg class="fill-current w-4" role="img" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Logout</title>
                                        <path
                                            d="M12 0C5.373 0 0 5.37 0 12s5.373 12 12 12c6.63 0 12-5.37 12-12S18.63 0 12 0zm-.84 4.67h1.68v8.36h-1.68V4.67zM12 18.155c-3.24-.002-5.865-2.63-5.864-5.868 0-2.64 1.767-4.956 4.314-5.655v1.71c-1.628.64-2.698 2.21-2.695 3.96 0 2.345 1.903 4.244 4.248 4.243 2.344-.002 4.244-1.903 4.243-4.248 0-1.745-1.07-3.312-2.694-3.95V6.63c2.55.7 4.314 3.018 4.314 5.66 0 3.24-2.626 5.864-5.865 5.864z" />
                                    </svg>
                                    <span class="ml-1 sm:hidden"> L </span>
                                    <span class="ml-1 hidden sm:flex"> Logout </span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <script src="/js/dashboard.js"></script>
</header>
