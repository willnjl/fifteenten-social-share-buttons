<?php 



function Fifteenten_CreateSocialShortcode()
{
    ?>
        <style>

        .fiften_sharers{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            padding-left: 0 !important;
            margin: 0;
        }
        .fiften_sharers__title{
            margin-bottom: 2rem;
        }
        
        .fiften_sharers li{
            list-style: none;
            margin-bottom: 5px;
        }
        
        .fiften_sharers__link{
            width: 45px;
            height: 45px;
            border-radius: 100%;
            background-color: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin-right: 5px;
            padding: 13px;
        }
        .fiften_sharers__link  svg{
            width: 100%;
            color: white;
            fill: white;
            stroke: white;
        }


        .fiften-fb{
            padding: 15px;
        }
        .fiften-whatsapp{
            padding: 11px;
        }
        
        

        .fiften_sharers__link:hover{
            background-color: #3bce6b
        }


    </style>
    <h5 class="fiften_sharers__title">
        Share this article
    </h5>
    <ul class="fiften_sharers">
        <li>
            <a
            target="_blank"
            class="fiften_sharers__link fiften-twitter"
            href="https://twitter.com/intent/tweet?text=<?= urlencode(get_the_title()); ?>&url=<?= esc_url(get_the_permalink()); ?>"
            ><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class=" 
            fa-twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z"></path></svg></a>
        </li>
        <li>
            <a
            target="_blank"
            class="fiften_sharers__link fiften-fb"
            href="https://www.facebook.com/sharer/sharer.php?u=<?= esc_url(get_the_permalink()); ?>&quote=<?= urlencode(get_the_title()); ?>"
            ><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class=" 
            fa-facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path></svg></a>
        </li>
        <li>
            <a
            target="_blank"
            class="fiften_sharers__link fiften-linkedin"
            href="https://www.linkedin.com/sharing/share-offsite/?url=<?= esc_url(get_the_permalink()); ?>"
            ><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class=" 
            fa-linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M100.3 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.6 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path></svg></a>
        </li>
        <li>
            <a
            target="_blank"
            class="fiften_sharers__link fiften-whatsapp"
            href="https://wa.me/?text=<?= urlencode(get_the_title()); ?>%5Cn%20<?= esc_url(get_the_permalink()); ?>"
            class="target"
            ><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class=" 
            fa-whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg></a>
        </li>
    </ul>

    <script> 
        let links = document.querySelectorAll(".fiften_sharers__link");
        links &&
        links.forEach((link) => {
            link.addEventListener("click", (e) => {
            e.preventDefault();
            let strWindowFeatures =
                "location=yes,height=570,width=520,scrollbars=yes,status=yes";
            let destination = e
                            .target
                            .closest('a')
                            .getAttribute("href");
                          
            window.open(destination, "_blank", strWindowFeatures);
            }, true);   
        });
    </script>

    <?
}