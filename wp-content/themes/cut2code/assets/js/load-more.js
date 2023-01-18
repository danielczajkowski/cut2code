const loadMorePosts = () => {
  jQuery(document).ready(function ($) {
    $(".load-more").on("click", function (e) {
      var button = e.currentTarget;
      var data = {
        action: "load_more_posts",
        query: load_more_params.posts,
        page: load_more_params.current_page,
      };
      $.ajax({
        url: load_more_params.ajaxurl,
        data: data,
        type: "POST",
        beforeSend: function (xhr) {
          button.classList.add("loading");
          setTimeout(() => {
            button.innerHTML = "Loading...";
          }, 100);
        },
        success: function (data) {
          if (data) {
            setTimeout(() => {
              button.classList.remove("loading");
              setTimeout(() => {
                button.innerHTML = "+ Show more";
              }, 100);
              button.closest("section").querySelector(".container__all_posts").insertAdjacentHTML("beforeend", data);
              load_more_params.current_page++;
              load_more_params.current_page == load_more_params.max_page ? button.closest(".container__read-more").remove() : null;
            }, 500);
          } else {
            button.closest(".container__read-more").remove();
          }
        },
      });
    });
  });
};
