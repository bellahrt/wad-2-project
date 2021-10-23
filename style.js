// src="https://unpkg.com/vue@next"

const app = Vue.createApp({
})
app.component('navbar', {

    // fill in and connect ahref link to about, contact us and login 

    template: `<div>
                    <div id="headerOne">
                        <div id="divLogo">
                            <h2 id="headlineLogo">EATGREENS</h2>
                            <p id="paragLogo">Your personal nutrition tracker</p>
                        </div>
                    
                        <nav id="navUl">
                            <ul id="ulNav">
                                <li class="liNav"><a class="aNav" href="">ABOUT</a></li>        
                                <li class="liNav"><a class="aNav" href="">CONTACT</a></li>
                                <li class="liNav"><a class="aNav" href="">LOG IN</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>`
} )
app.mount('#nav')

app.component('home-navbar', {

    // home trail walking nav bar
    template: `<div>
                    <nav class="navbar navbar-expand-lg navbar-light m-1" id="navbar">
                        <div class="container-fluid">
                            <header id="headerOne">	
                                <div id="divLogo">
                                    <h2 id="headlineLogo" >EATGREENS</h2>           
                                </div>
                            </header>
                        <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./home.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./places.html">Walking-trail</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </nav> 
                </div>`
} )
app.mount('#homenav')