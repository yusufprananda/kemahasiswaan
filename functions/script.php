<!-- Link script -->
<!-- Jquery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- Popper -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.min.js"></script>
<!-- Font Awesome -->
<script src="js/all.min.js"></script>
<!-- Facebook Plugin -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v6.0"></script>
<!-- Twitter Plugin -->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!-- Instagram Plugin -->
<script async src="//www.instagram.com/embed.js"></script>
<!-- My Script -->
<script>
    var clickOpen = 0;
    var clickSearch = 0;

    function openNav() {
        if (clickOpen % 2 == 0) {
            document.getElementById("cNavover").style.width = "100%";
        } else {
            document.getElementById("cNavover").style.width = "0%";
        }
        clickOpen += 1;
    }

    function openSearch() {
        if (clickSearch % 2 == 0) {
            document.getElementById("cSearch").style.width = "100%";
            document.getElementById("cSearchbar").focus();
        } else {
            document.getElementById("cSearch").style.width = "0%";
        }
        clickSearch += 1;
    }

    function closeNav() {
        document.getElementById("cNavover").style.width = "0%";
        clickOpen += 1;
    }

    function closeSearch() {
        document.getElementById("cSearch").style.width = "0%";
        clickSearch += 1;
    }
    // Typesett effect on tittle
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="cWrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('cTypewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".cTypewrite > .cWrap { border-right: 0.08em solid #000}";
        document.body.appendChild(css);
    };


    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var bWindow = window.matchMedia("(min-width: 1200px)");
        var sWindow = window.matchMedia("(max-width: 1200px)")
        if (scroll > 41 && bWindow.matches) {
            $('.cJumbotron').css('margin-top', '77px');
            $(".navbar").addClass("fixed-top");
            $(".navbar").addClass("shadow");
        }
        else if (scroll > 41 && sWindow.matches) {
            $('.cJumbotron').css('margin-top', '77px');
            $(".navbar").addClass("fixed-top");
            $(".navbar").addClass("shadow");
        }
        else if (scroll > 41 && sWindow.matches) {
            $('.cJumbotron').css('margin-top', '0px');
            $(".navbar").removeClass("fixed-top");
            $(".navbar").removeClass("shadow");
        }
        else {
            $(".navbar").removeClass("fixed-top");
            $(".navbar").removeClass("shadow");
            $('.cJumbotron').css('margin-top', '0px');
        }
        console.log(scroll)
    });
</script>