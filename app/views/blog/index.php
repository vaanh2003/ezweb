<div class="App_withSidebarContent__o4VlQ" style="min-height: 1200px;">
    <div class="App_withSidebarContent__o4VlQ App_withSidebarContent__o4VlQ-db">
        <div class="AppSidebarContentChild">
            <h2 class="">CÂU HỎI</h2>
            <div class="question-content">
                <?php
                $i = 0;
                foreach ($data as $key => $value) {
                    $i++;
                    echo "
                            <div class='question'>
                                <div class='question-item'>
                                    <div class='question-item-one'>
                                        <div class='question-name-user'>
                                            <img class='img-user' src='./img/good-review.png' alt=''>
                                            <p>" . $value[6] . "</p>
                                        </div>
                                        <div class='cha-dropdown-menu'>
                                            <button id='dropdown-button' onclick='toggleDropdown(" . $i . ")''>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-three-dots' viewBox='0 0 16 16'>
                                                    <path d='M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z'/>
                                                </svg>
                                            </button>
                                            <ul class='dropdown-menu' id='myDropdown" . $i . "'>
                                                <li><a class='dropdown-item' href='" . base_url . "sua_cau_hoi?idcauhoi=" . $value[0] . "'>Sửa câu hỏi</a></li>
                                                <li><a class='dropdown-item' href='" . base_url . "xoa_cau_hoi?idcauhoi=" . $value[0] . "'>xóa câu hỏi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class='question-item-tow'>
                                        <h4>" . $value[4] . "</h4>
                                        <div class='date-time'>
                                            <p>" . $value[3] . "</p>
                                            <div class='number-cmt'>
                                                <p>" . $value[5] . "</p>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chat-left-dots' viewBox='0 0 16 16'>
                                                    <path d='M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
                                                    <path d='M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        
                        ";
                }

                ?>
                <script>
                    // Lấy tham chiếu đến các phần tử HTML
                    var dropdownVisible = false;

                    function toggleDropdown($a) {
                        $b = "myDropdown";
                        $c = $b + $a;
                        var dropdownMenu = document.getElementById($c);
                        dropdownVisible = !dropdownVisible;

                        if (dropdownVisible) {
                            dropdownMenu.style.display = "block";
                        } else {
                            dropdownMenu.style.display = "none";
                        }
                    }
                </script>
            </div>
        </div>
        <div class='sidebar-content-child'>
            <div class='button-container'>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '
                    
                        <a href="' . base_url . 'cauhoi?iduser=' . $_SESSION['username']['id'] . '">
                            <button>Đặt câu hỏi</button>
                        </a>
                    
                    ';
                } else {
                    echo '
                    
                        <a href="' . base_url . 'login">
                            <button>Đặt câu hỏi</button>
                        </a>
                    
                    ';
                }

                ?>
                <button>Đăng Blog</button>
            </div>
            <div class='banner-container'>
                <img src='https://inkythuatso.com/uploads/thumbnails/800/2022/03/anh-genshin-impact-4k-klee-17-10-24-48.jpg' alt=''>
            </div>
        </div>
    </div>
    </h1>
</div>