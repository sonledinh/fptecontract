const env = "prod";
const baseUrl = env === "dev" ? "http://localhost/fptecontract/" : "https://econtract.fpt.com.vn/";
const category = 6; //Support
const page_size = 5;
jQuery(document).ready(function () {
  support_page.init();
});
var support_page = {};
support_page.init = function () {
  support_page.get_post();
};
support_page.get_post = function () {
    var accordion = document.getElementById("accordion");
    accordion.innerHTML = '<div></div>'
    support_page.loader(true)
    support_page.show_load_more(0)
  jQuery
    .ajax({
      type: "GET",
      url: `${baseUrl}wp-json/wp/v2/posts?categories=${category}&per_page=${page_size}&orderby=date`,
      dataType: "json",
      success: function (result) {
        support_page.loader(false)
        if (result.length > 0) {
          for (var item of result) {
            var dataItem =
              "<div class='accordion-item'>" +
              "<div class='accordion-head'>" +
              "<span class='accordion-btn button'>" +
              "<i class='icon-plus'></i>" +
              "</span>" +
              `<span>${item.title.rendered}</span>` +
              "</div>" +
              "<div class='accordion-content'>" +
              `${item.content.rendered}` +
              "</div>" +
              "</div>";
            accordion.innerHTML += dataItem;
          }
          support_page.load_content();
          support_page.show_load_more(result.length)
        } else {
            accordion.innerHTML = '<div class="accordion-item">Không có dữ liệu!</div>'
        }
      },
    })
    .fail(function (error) {
        support_page.loader(false)
        accordion.innerHTML = '<div class="accordion-item">Không có dữ liệu!</div>'
    });
};

jQuery('#input_search').keypress(function(e) {
    if (e.keyCode == 13) {
        support_page.search_content()
    }
});

jQuery('#load_more').click(function(e) {
    let tempPageSize = jQuery('#input_page_size').val() ? (
        + jQuery('#input_page_size').val() + 5) : page_size + 5
    support_page.load_more(tempPageSize)
});

support_page.show_load_more = (total) => {
    if (total > page_size) {
        jQuery('#load_more').show()
    } else {
        jQuery('#load_more').hide()
    }
}

support_page.search_content = () => {
    let search = jQuery('#input_search').val()
    support_page.loader(true)
    support_page.show_load_more(0)
    var accordion = document.getElementById("accordion");
    accordion.innerHTML = '<div></div>'
  jQuery
    .ajax({
      type: "GET",
      url: `${baseUrl}wp-json/wp/v2/posts?categories=${category}&search=${search}&per_page=5&orderby=date`,
      dataType: "json",
      success: function (result) {
        // youth_union.loader(false)
        support_page.loader(false)
        if (result.length > 0) {
          for (var item of result) {
            var dataItem =
              "<div class='accordion-item'>" +
              "<div class='accordion-head'>" +
              "<span class='accordion-btn button'>" +
              "<i class='icon-plus'></i>" +
              "</span>" +
              `<span>${item.title.rendered}</span>` +
              "</div>" +
              "<div class='accordion-content'>" +
              `${item.content.rendered}` +
              "</div>" +
              "</div>";
            accordion.innerHTML += dataItem;
          }
          support_page.load_content();
          support_page.show_load_more(result.length)
        } else {
            accordion.innerHTML = '<div class="accordion-item">Không có dữ liệu!</div>'
        }
      },
    })
    .fail(function (error) {
        support_page.loader(false)
        accordion.innerHTML = '<div class="accordion-item">Không có dữ liệu!</div>'
    });
};

support_page.load_more = function (page_size_total) {
    jQuery('#input_page_size').val(page_size_total)
    var accordion = document.getElementById("accordion");
    accordion.innerHTML = '<div></div>'
    support_page.loader(true)
    support_page.show_load_more(0)
    
  jQuery
    .ajax({
      type: "GET",
      url: `${baseUrl}wp-json/wp/v2/posts?categories=${category}&per_page=${page_size_total}&orderby=date`,
      dataType: "json",
      success: function (result) {
        support_page.loader(false)
        if (result.length > 0) {
          for (var item of result) {
            var dataItem =
              "<div class='accordion-item'>" +
              "<div class='accordion-head'>" +
              "<span class='accordion-btn button'>" +
              "<i class='icon-plus'></i>" +
              "</span>" +
              `<span>${item.title.rendered}</span>` +
              "</div>" +
              "<div class='accordion-content'>" +
              `${item.content.rendered}` +
              "</div>" +
              "</div>";
            accordion.innerHTML += dataItem;
          }
          support_page.load_content();
          support_page.show_load_more(result.length)
        } else {
            accordion.innerHTML = '<div class="accordion-item">Không có dữ liệu!</div>'
        }
      },
    })
    .fail(function (error) {
        support_page.loader(false)
        accordion.innerHTML = '<div class="accordion-item">Không có dữ liệu!</div>'
    });
};

support_page.loader = function (isShow) {
    if (isShow === true) {
        $('.bx_loader').css('display', 'flex')
    } else {
        $('.bx_loader').css('display', 'none')
    }
}

support_page.load_content = () => {
  $accordionItems = $(".accordion-item");

  function toggleAnAccordion(index) {
    $btn = $($accordionItems[index]).find(".accordion-btn");
    $btn.toggleClass("accordion-btn-active");
    $btn.html(
      `<i class="icon-${
        $btn.hasClass("accordion-btn-active") ? "minus" : "plus"
      }"></i>`
    );

    $($accordionItems[index]).find(".accordion-content").slideToggle();
  }

  function closeAccordionsBulk(exceptIndex) {
    $accordionItems.each(function (index) {
      if (index !== exceptIndex) {
        $($accordionItems[index])
          .find(".accordion-btn")
          .removeClass("accordion-btn-active")
          .html("<i class='icon-plus'></i>");

        $($accordionItems[index]).find(".accordion-content").slideUp();
      }
    });
  }

  $accordionItems.each(function (index, item) {
    console.log("=item", item);
    $(item)
      .find(".accordion-head")
      .on("click", function () {
        toggleAnAccordion(index);
        closeAccordionsBulk(index);
      });
  });
};

$(document).ready(function () {
  $("#video-list").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    centerMode: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
    ],
  });

  $("#artical-list").slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: false,
    centerMode: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true,
        },
      },
    ],
  });
});
