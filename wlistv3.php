<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="comicicon.png" type="image/x-icon">
    <title>Wishlist - Comicphile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>

<style>
    body {
        background-image: url(https://mrwallpaper.com/images/hd/classic-dialogue-comic-book-bkctgbhicb7cb3ea.jpg);
        font-family: "Comic Neue", cursive;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    header {
        width: 100%;
        background-color: orange;
    }

    .heder {
        padding: 50px;
        font-size: 50px;
        color: white;
        text-align: center;
        font-family: 'Bangers', cursive;
    }

    .div {
        width: 70%;
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        margin: 20px auto;
        padding: 35px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .explore {
        padding: 50px;
        background-color: #ffda1e;
        width: 100%;
        height: 150px;
        text-align: center;
        font-size: 24px;
        height: 50px;
        margin-top: -1px;
    }

    .img {
        width: 30%;
        padding: 10px;
        text-align: center;
        box-sizing: border-box;
        padding-top: 20px;
    }

    img {
        width: 100%;
        max-width: 100%;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #ff1744;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #e0143c;
    }

    footer{
        background-color: black;
        margin-left: -50px;
        padding: 250px;
        padding-top: 100px;
        padding-bottom: 100px;
        background-image: url();
        background-repeat: no-repeat;
        background-size: 80%;
        display: flex;
        justify-content: space-between;
        color: white;}

    #fimage{
        width: 200px;}

    .card {
        width: fit-content;
        height: fit-content;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        }

    .socialContainer {
        width: 52px;
        height: 52px;
        background-color: rgb(44, 44, 44);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        transition-duration: .3s;
        }

    .containerOne:hover {
        background-color: #d62976;
        transition-duration: .3s;
        }

    .containerTwo:hover {
        background-color: #00acee;
        transition-duration: .3s;
        }

    .containerThree:hover {
        background-color: #0072b1;
        transition-duration: .3s;
        }

    .containerFour:hover {
        background-color: #25d366;
        transition-duration: .3s;
        }

    .socialSvg {
        width: 17px;
        }

    .socialSvg path {
        fill: rgb(255, 255, 255);
        }
        
    #f1, #f2, #f3 {
            flex: 1;
            padding-left: 100px;
        }

    #f1{
            padding-top: 28px;
            padding-left: -250px;
        }


    .wishlist-container {
        width: 70%;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .wishlist-item {
        padding: 10px;
        margin: 10px 0;
        background-color: #ffda1e;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .wishlist-item img {
        width: 100px;
        margin-right: 20px;
    }

    .wishlist-item span.completed {
        color: rgb(43, 117, 43);

    }

    .wishlist-buttons {
        display: flex;
        gap: 10px;
    }
</style>

<body>
    <header>
        <!-- <a href="comicweb.html"><img src="comicicon.png" class="comicweb"></a> -->
        <h1 class="heder">Explore</h1>
    </header>

    <div class="div">
        <h2 class="explore">No items in wishlist? Explore</h2>
        <div class="img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT_BIblf3tJEXbuncIoqG7rvTuBFM-0Sa__w&s" alt="Comic Image 1">
            <button onclick="addToWishlist('WHIZ COMICS', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT_BIblf3tJEXbuncIoqG7rvTuBFM-0Sa__w&s')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://m.media-amazon.com/images/I/91WdjOE3zVL._AC_UF1000,1000_QL80_.jpg" alt="Comic Image 2">
            <button onclick="addToWishlist('DETECTIVE COMICS', 'https://m.media-amazon.com/images/I/91WdjOE3zVL._AC_UF1000,1000_QL80_.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://cdn.marvel.com/u/prod/marvel/i/mg/9/80/645577dc06dca/portrait_uncanny.jpg" alt="Comic Image 3">
            <button onclick="addToWishlist('SPIDER-MAN 2', 'https://cdn.marvel.com/u/prod/marvel/i/mg/9/80/645577dc06dca/portrait_uncanny.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Front_cover%2C_%22Wow_Comics%22_no._38_%28art_by_Jack_Binder%29.jpg" alt="Comic Image 4">
            <button onclick="addToWishlist('WOW COMICS', 'https://upload.wikimedia.org/wikipedia/commons/1/1e/Front_cover%2C_%22Wow_Comics%22_no._38_%28art_by_Jack_Binder%29.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://m.media-amazon.com/images/I/81vWg-nd5PL._AC_UF1000,1000_QL80_.jpg" alt="Comic Image 5">
            <button onclick="addToWishlist('THE INCREDIBLE HULK AND NOW THE WOLVERINE', 'https://m.media-amazon.com/images/I/81vWg-nd5PL._AC_UF1000,1000_QL80_.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://cdn.marvel.com/u/prod/marvel/i/mg/8/d0/66bb717cb220d/portrait_uncanny.jpg" alt="Comic Image 6">
            <button onclick="addToWishlist('GIANT-SIZE THOR', 'https://cdn.marvel.com/u/prod/marvel/i/mg/8/d0/66bb717cb220d/portrait_uncanny.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://cdn.marvel.com/u/prod/marvel/i/mg/3/10/66bb7144e2054/portrait_uncanny.jpg" alt="Comic Image 7">
            <button onclick="addToWishlist('VENOM WAR-VENOMOUS', 'https://cdn.marvel.com/u/prod/marvel/i/mg/3/10/66bb7144e2054/portrait_uncanny.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://cdn.marvel.com/u/prod/marvel/i/mg/3/b0/66bb7145805e7/portrait_uncanny.jpg" alt="Comic Image 8">
            <button onclick="addToWishlist('VOLWEINE REVENGE', 'https://cdn.marvel.com/u/prod/marvel/i/mg/3/b0/66bb7145805e7/portrait_uncanny.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://cdn.marvel.com/u/prod/marvel/i/mg/3/80/66bb716207b95/portrait_uncanny.jpg" alt="Comic Image 9">
            <button onclick="addToWishlist('PHEONIX', 'https://cdn.marvel.com/u/prod/marvel/i/mg/3/80/66bb716207b95/portrait_uncanny.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://cdn.marvel.com/u/prod/marvel/i/mg/3/e0/66bb7187d9306/portrait_uncanny.jpg" alt="Comic Image 10">
            <button onclick="addToWishlist('DEADPOOL', 'https://cdn.marvel.com/u/prod/marvel/i/mg/3/e0/66bb7187d9306/portrait_uncanny.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://cdn.marvel.com/u/prod/marvel/i/mg/4/80/66bb71798746f/portrait_uncanny.jpg" alt="Comic Image 11">
            <button onclick="addToWishlist('GHOST RIDER-FINAL VENGEANCE', 'https://cdn.marvel.com/u/prod/marvel/i/mg/4/80/66bb71798746f/portrait_uncanny.jpg')">ADD TO WISHLIST+</button>
        </div>
        <div class="img">
            <img src="https://cdn.marvel.com/u/prod/marvel/i/mg/4/00/66bb716a77945/portrait_uncanny.jpg" alt="Comic Image 12">
            <button onclick="addToWishlist('GET FURY', 'https://cdn.marvel.com/u/prod/marvel/i/mg/4/00/66bb716a77945/portrait_uncanny.jpg')">ADD TO WISHLIST+</button>
        </div>
    </div>

    <div class="wishlist-container" id="wishlist">
        <h2>Wishlist</h2>
    </div>

    <footer>
        <img src="https://w0.peakpx.com/wallpaper/597/510/HD-wallpaper-nice-try-spiderman-comics-marvel-spider-stan-lee.jpg" alt="" id="fimage">
        <div id="f1">
            MADE BY VELAN
            <br><br>
            &copy; 2024 COMICPHILE | All Rights Reserved
        </div>
        <div id="f2">
            <h4>QUICK LINKS</h4>
            <li>ABOUT</li>
            <li>COMICS</li>
            <li>NEW</li>
            <li>FAQS</li>
        </div>
        <div id="f3">
            <h4>LEGAL</h4>
            <li>TERMS & CONDITIONS</li>
            <li>PRIVACY POLICY</li>
            <br><br>
            <h4>CONTACT US</h4>
            <div class="card">
            <a href="https://www.instagram.com/_vlon_11/" class="socialContainer containerOne">
                <svg class="socialSvg instagramSvg" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path> </svg>
            </a>
            
            <a href="" class="socialContainer containerTwo">
                <svg class="socialSvg twitterSvg" viewBox="0 0 16 16"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path> </svg>              </a>
                
            <a href="https://www.linkedin.com/in/velan-e-40141721b/" class="socialContainer containerThree">
                <svg class="socialSvg linkdinSvg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
            </a>
            
            <a href="#" class="socialContainer containerFour">
                <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path> </svg>
            </a>
            </div>             


        </div>
    </footer>

    <script>

        class Task {
            constructor(name, imageUrl) {
                this.name = name;
                this.imageUrl = imageUrl;
                this.completed = false;}}

        class TaskManager {
            constructor() {     this.tasks = [];}

            addtask(task) {     this.tasks.push(task);
                                this.tasks2();}

            removetask(taskName) {
                this.tasks = this.tasks.filter(task => task.name !== taskName);
                this.tasks2();}

            marktask(taskName) {
                const task = this.tasks.find(task => task.name === taskName);
                task.completed = !task.completed;
                this.tasks2();}

            tasks2() {
                const wishlist = document.getElementById('wishlist');
                wishlist.innerHTML = '<h2>Your Wishlist</h2>';
                this.tasks.forEach(task => {
                    const taskItem = document.createElement('div');
                    taskItem.className = 'wishlist-item';
                    taskItem.innerHTML = `
                        <img src="${task.imageUrl}" alt="${task.name}">
                        <span class="${task.completed ? 'completed' : ''}">${task.name}</span>
                        <div class="wishlist-buttons">
                            <button onclick="taskManager.marktask('${task.name}')" style="width:200px;">
                                ${task.completed ? 'Mark as Unread' : 'Mark as Read'}
                            </button>
                            <button onclick="taskManager.removetask('${task.name}')" style="width:200px;">Remove</button>
                        </div>
                    `;
                    wishlist.appendChild(taskItem);
                });
                
            }
        }

        const taskManager = new TaskManager();

        function addToWishlist(comicName, comicImage) {
            const task = new Task(comicName, comicImage);
            taskManager.addtask(task);
        }
    </script>

</body>
</html>
