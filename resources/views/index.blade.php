<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-2 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category 1">Category One</option>
                <option value="Category 2">Category Two</option>
                <option value="Category 3">Category Three</option>
                <option value="Category 4">Category Four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter 1">Filter One</option>
                <option value="Filter 2">Filter Two</option>
                <option value="Filter 3">Filter Three</option>
                <option value="Filter 4">Filter Four</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                   class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-700 " fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div> <!-- end filters -->

    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex
             cursor-pointer">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs
                     uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                <div class="flex-none mx-2 md:mx-4 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-2 md:mx-4">
                    <h4 class="text-xl flex flex-col font-semibold mt-2 md:mt-0">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad??
                        bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak
                        kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z
                        y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de
                        s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile
                        ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k
                        yaz??l??mlar?? ile pop??ler olmu??tur.
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2 mt-4 md:mt-0">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center
                             w-28 h-7 py-2 px-4">Open
                            </div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full border h-7 transition duration-150 ease-in py-2
                            px-3"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" height="6" width="24" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white
                                     shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Mark
                                            as
                                            Spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>

                        <div class="flex items-center md:hidden mt-4 md:mt-0">
                            <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                            </div>
                            <button class="w-20 bg-gray-200 border border-gray-200 -mx-5 hover:border-blue-hover font-bold text-xxs
                     uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->

        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex
             cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-blue text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-blue text-white border border-blue hover:border-blue-hover font-bold text-xxs
                     uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad??
                        bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak
                        kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z
                        y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de
                        s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile
                        ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k
                        yaz??l??mlar?? ile pop??ler olmu??tur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center
                             w-28 h-7 py-2 px-4">In Progress
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2
                            px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="6" width="24" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold text-sm text-left bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Mark
                                            as
                                            Spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->

        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex
             cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs
                     uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad??
                        bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak
                        kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z
                        y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de
                        s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile
                        ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k
                        yaz??l??mlar?? ile pop??ler olmu??tur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-red-600 text-white text-xxs font-bold uppercase leading-none rounded-full text-center
                             w-28 h-7 py-2 px-4">Closed
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2
                            px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="6" width="24" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold text-sm text-left bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Mark
                                            as
                                            Spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->

        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex
             cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs
                     uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad??
                        bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak
                        kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z
                        y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de
                        s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile
                        ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k
                        yaz??l??mlar?? ile pop??ler olmu??tur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-full text-center
                             w-28 h-7 py-2 px-4">Implemented
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2
                            px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="6" width="24" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold text-sm text-left bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Mark
                                            as
                                            Spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex
             cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs
                     uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad??
                        bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak
                        kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z
                        y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de
                        s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile
                        ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k
                        yaz??l??mlar?? ile pop??ler olmu??tur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-full text-center
                             w-28 h-7 py-2 px-4">Considering
                            </div>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2
                            px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="6" width="24" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold text-sm text-left bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Mark
                                            as
                                            Spam</a></li>
                                    <li><a href="#"
                                           class="hover:bg-gray-100 transition duration-150 block ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
    </div> <!-- end ideas container -->
</x-app-layout>
