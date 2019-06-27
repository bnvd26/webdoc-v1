<template>
    <div id="app">


<div v-if="this.$route.params.id == 0">
<img class="speaker" src="../../images/speaker.svg" alt="Coupe son">
  <img id="infos" class="infos" src="../../images/infos.svg" alt="Informations Navigation">

 </div>
 

  <img class="brain" src="../../images/cerveau.svg" alt="">
  <div id="filter" class="filter"></div>

  <h1 id="title" class="title">{{chapterOnep.title}}</h1>

  <nav id="nav" class="nav">
    <!--  Menu cerveau icône  -->
    <div class="menu">
      <svg class="basis" width="30" height="34" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M29.1602 19.4923C29.72 18.6522 30 17.6039 30 16.6957C30 15.3263 29.3917 14.0542 28.3479 13.1915C28.5789 12.6395 28.6957 12.0653 28.6957 11.4783C28.6957 9.66163 27.6355 7.96937 26.0592 7.17913C26.2984 5.19561 25.0059 3.37748 23.0905 2.91372C22.3409 1.1807 20.6723 0 18.913 0C17.2754 0 15.8067 0.955174 15 2.34887C14.1933 0.955174 12.7245 0 11.087 0C9.32759 0 7.659 1.1807 6.90946 2.91378C4.98261 3.38048 3.70226 5.20767 3.94076 7.17913C2.36459 7.9693 1.30435 9.66163 1.30435 11.4783C1.30435 12.0653 1.42109 12.6395 1.65209 13.1915C0.608283 14.0542 0 15.3263 0 16.6957C0 17.6087 0.282391 18.6556 0.839804 19.4922C0.295109 20.2612 0 21.1724 0 22.1087C0 23.3228 0.492261 24.4793 1.36298 25.3381C0.915326 28.0441 3.07337 30.7826 5.86957 30.7826C5.88978 30.7826 5.90967 30.7823 5.92917 30.7817C6.85624 32.381 8.57707 33.3913 10.4348 33.3913C12.371 33.3913 14.101 32.2291 15 30.5547C15.899 32.2291 17.629 33.3913 19.5652 33.3913C21.4229 33.3913 23.1438 32.381 24.0708 30.7817C24.0904 30.7823 24.1102 30.7826 24.1304 30.7826C26.605 30.7826 28.6957 28.6024 28.6957 26.0217C28.6957 25.802 28.6763 25.576 28.637 25.3381C29.5077 24.4793 30 23.3228 30 22.1087C30 21.1724 29.7049 20.2612 29.1602 19.4923ZM14.3478 9.87267C13.9638 9.64996 13.5185 9.52174 13.0435 9.52174C12.6833 9.52174 12.3913 9.81372 12.3913 10.1739C12.3913 10.5341 12.6833 10.8261 13.0435 10.8261C13.7627 10.8261 14.3478 11.4112 14.3478 12.1304V24.5328C13.391 23.4475 11.992 22.7609 10.4348 22.7609C10.0746 22.7609 9.78261 23.0528 9.78261 23.413C9.78261 23.7732 10.0746 24.0652 10.4348 24.0652C12.5924 24.0652 14.3478 25.8206 14.3478 27.9783C14.3478 30.2054 12.5558 32.087 10.4348 32.087C8.92487 32.087 7.53489 31.1941 6.89354 29.8122C6.7753 29.5575 6.50752 29.4073 6.22833 29.4387C6.18222 29.444 6.13637 29.4502 6.09052 29.4564C4.23443 29.7102 2.14422 27.6085 2.71004 25.2573C2.76815 25.0158 2.68402 24.7623 2.49313 24.6035C1.73765 23.9748 1.30435 23.0655 1.30435 22.1087C1.30435 21.5171 1.47163 20.9382 1.78291 20.4305C2.56513 21.0716 3.53811 21.4565 4.56522 21.4565C4.92541 21.4565 5.21739 21.1645 5.21739 20.8043C5.21739 20.4442 4.92541 20.1522 4.56522 20.1522C2.79528 20.1522 1.30435 18.5367 1.30435 16.6957C1.30435 15.5788 1.87363 14.5514 2.8273 13.9473C3.12111 13.7611 3.21717 13.3772 3.04559 13.0747C2.7557 12.5634 2.6087 12.0263 2.6087 11.4783C2.6087 9.71804 4.04361 8.02174 5.86957 8.02174C7.6067 8.02174 9.13043 9.63698 9.13043 11.4783C9.13043 11.8385 9.42241 12.1304 9.78261 12.1304C10.1428 12.1304 10.4348 11.8385 10.4348 11.4783C10.4348 8.89761 8.34417 6.71739 5.86957 6.71739C5.65122 6.71739 5.43404 6.73506 5.21902 6.76852C5.2187 6.75137 5.21739 6.73467 5.21739 6.71739C5.21739 5.26193 6.39893 4.1087 7.82609 4.1087C8.52274 4.1087 9.17804 4.38006 9.67122 4.87272C9.92602 5.12726 10.3389 5.127 10.5935 4.87226C10.8481 4.61739 10.8479 4.2045 10.5931 3.94996C9.99809 3.35563 9.24554 2.97659 8.43 2.85098C9.00515 1.99722 9.96157 1.30435 11.087 1.30435C12.8241 1.30435 14.3478 2.91952 14.3478 4.76087V9.87267ZM25.4348 21.4565C26.462 21.4565 27.4349 21.0715 28.2172 20.4307C28.5284 20.9383 28.6957 21.5172 28.6957 22.1087C28.6957 23.0655 28.2623 23.9748 27.5069 24.6035C27.316 24.7623 27.2319 25.0158 27.29 25.2573C27.3592 25.5444 27.3913 25.7873 27.3913 26.0217C27.3913 28.046 25.5603 29.6821 23.9095 29.4564C23.8637 29.4502 23.8178 29.444 23.7717 29.4387C23.4921 29.4071 23.2246 29.5575 23.1065 29.8122C22.4652 31.1941 21.0751 32.087 19.5652 32.087C17.4442 32.087 15.6522 30.2054 15.6522 27.9783C15.6522 25.8206 17.4076 24.0652 19.5652 24.0652C19.9253 24.0652 20.2174 23.7732 20.2174 23.413C20.2174 23.0528 19.9253 22.7609 19.5652 22.7609C18.008 22.7609 16.609 23.4475 15.6522 24.5328V12.1304C15.6522 11.4112 16.2373 10.8261 16.9565 10.8261C17.3167 10.8261 17.6087 10.5341 17.6087 10.1739C17.6087 9.81372 17.3167 9.52174 16.9565 9.52174C16.4815 9.52174 16.0362 9.64996 15.6522 9.87267V4.76087C15.6522 2.91952 17.1759 1.30435 18.913 1.30435C20.0384 1.30435 20.9948 1.99722 21.5699 2.85091C20.7545 2.97652 20.002 3.35557 19.4069 3.94989C19.1521 4.20443 19.1518 4.61733 19.4063 4.8722C19.6609 5.12707 20.0739 5.12726 20.3287 4.87272C20.822 4.38006 21.4773 4.1087 22.1739 4.1087C23.6082 4.1087 24.7826 5.26872 24.7826 6.71739C24.7826 6.73461 24.7813 6.75137 24.781 6.76852C24.566 6.73506 24.3488 6.71739 24.1304 6.71739C21.6558 6.71739 19.5652 8.89761 19.5652 11.4783C19.5652 11.8385 19.8573 12.1304 20.2174 12.1304C20.5775 12.1304 20.8696 11.8385 20.8696 11.4783C20.8696 9.63698 22.3933 8.02174 24.1304 8.02174C25.9553 8.02174 27.3913 9.7172 27.3913 11.4783C27.3913 12.0263 27.2443 12.5634 26.9544 13.0747C26.7829 13.3772 26.879 13.7611 27.1728 13.9473C28.1264 14.5514 28.6957 15.5788 28.6957 16.6957C28.6957 18.5433 27.1995 20.1522 25.4348 20.1522C25.0747 20.1522 24.7826 20.4442 24.7826 20.8043C24.7826 21.1645 25.0747 21.4565 25.4348 21.4565Z"
          fill="white" />
        <path
          d="M12.8775 13.9601C12.6374 13.6916 12.2251 13.6687 11.9566 13.9088C9.86525 15.7796 6.52188 14.2845 6.52188 11.4783C6.52188 11.1182 6.2299 10.8262 5.8697 10.8262C5.50951 10.8262 5.21753 11.1182 5.21753 11.4783C5.21753 13.7424 6.87451 15.6258 9.03927 15.9821C8.78818 16.773 8.04705 17.3479 7.17405 17.3479C6.81386 17.3479 6.52188 17.6399 6.52188 18.0001C6.52188 18.3603 6.81386 18.6523 7.17405 18.6523C8.76255 18.6523 10.0886 17.5103 10.3764 16.0043C11.2833 15.8857 12.137 15.4976 12.8262 14.8809C13.0947 14.6408 13.1176 14.2285 12.8775 13.9601Z"
          fill="white" />
        <path
          d="M5.8697 25.3689C5.50951 25.3689 5.21753 25.6609 5.21753 26.0211C5.21753 26.3813 5.50951 26.6732 5.8697 26.6732C7.60683 26.6732 9.13057 28.2885 9.13057 30.1298C9.13057 30.49 9.42255 30.7819 9.78275 30.7819C10.1429 30.7819 10.4349 30.49 10.4349 30.1298C10.4349 27.5491 8.34431 25.3689 5.8697 25.3689Z"
          fill="white" />
        <path
          d="M11.0869 20.1523C8.87698 20.1523 6.97954 21.3644 5.98041 23.1268C5.80283 23.4401 5.91285 23.8382 6.22615 24.0158C6.53952 24.1933 6.93748 24.0834 7.11513 23.77C7.8935 22.3968 9.37041 21.4567 11.0869 21.4567C11.4471 21.4567 11.7391 21.1647 11.7391 20.8045C11.7391 20.4443 11.4471 20.1523 11.0869 20.1523Z"
          fill="white" />
        <path
          d="M23.152 17.3479C22.279 17.3479 21.5379 16.773 21.2868 15.9821C23.4516 15.6258 25.1086 13.7424 25.1086 11.4783C25.1086 11.1182 24.8165 10.8262 24.4564 10.8262C24.0963 10.8262 23.8042 11.1182 23.8042 11.4783C23.8042 13.2764 22.3414 14.7392 20.5434 14.7392C19.7401 14.7392 18.9682 14.4443 18.3695 13.9088C18.1011 13.6687 17.6887 13.6916 17.4486 13.9601C17.2084 14.2285 17.2314 14.6408 17.4999 14.8809C18.1891 15.4976 19.0428 15.8857 19.9497 16.0043C20.2375 17.5103 21.5635 18.6523 23.152 18.6523C23.5122 18.6523 23.8042 18.3603 23.8042 18.0001C23.8042 17.6399 23.5122 17.3479 23.152 17.3479Z"
          fill="white" />
        <path
          d="M24.1304 25.3689C21.6558 25.3689 19.5652 27.5491 19.5652 30.1298C19.5652 30.49 19.8572 30.7819 20.2174 30.7819C20.5775 30.7819 20.8695 30.49 20.8695 30.1298C20.8695 28.2885 22.3933 26.6732 24.1304 26.6732C24.4905 26.6732 24.7826 26.3813 24.7826 26.0211C24.7826 25.6609 24.4905 25.3689 24.1304 25.3689Z"
          fill="white" />
        <path
          d="M24.0196 23.1268C23.0229 21.3686 21.1281 20.1523 18.913 20.1523C18.5529 20.1523 18.2609 20.4443 18.2609 20.8045C18.2609 21.1647 18.5529 21.4567 18.913 21.4567C20.6283 21.4567 22.1063 22.3965 22.8847 23.77C23.0626 24.0838 23.4608 24.1932 23.7737 24.0158C24.0871 23.8382 24.1971 23.4402 24.0196 23.1268Z"
          fill="white" />
      </svg>

      <svg class="hovered" xmlns="http://www.w3.org/2000/svg" width="30" height="34" viewBox="0 0 30 34">
        <defs>

        </defs>
        <title>Fichier 1</title>
        <g id="Calque_2" data-name="Calque 2">
          <g id="Calque_1-2" data-name="Calque 1">
            <path class="cls-1"
              d="M24.13,20.16a.66.66,0,0,1-.65-.66.65.65,0,0,1,.65-.65A3.43,3.43,0,0,0,27.4,15.4a3.23,3.23,0,0,0-1.53-2.75.67.67,0,0,1-.22-.88,3.18,3.18,0,0,0,.44-1.59,3.44,3.44,0,0,0-3.26-3.46,3.45,3.45,0,0,0-3.26,3.46.65.65,0,0,1-1.3,0,4.73,4.73,0,0,1,4.56-4.76,4.62,4.62,0,0,1,.65,0v0A2.61,2.61,0,0,0,19,3.57a.65.65,0,0,1-.92-.92,3.9,3.9,0,0,1,2.16-1.1A3.31,3.31,0,0,0,17.61,0a3.46,3.46,0,0,0-3.26,3.46V8.57a2.64,2.64,0,0,1,1.31-.35.65.65,0,0,1,.65.65.66.66,0,0,1-.65.66,1.31,1.31,0,0,0-1.31,1.3v12.4a5.24,5.24,0,0,1,3.92-1.77.65.65,0,0,1,.65.65.66.66,0,0,1-.65.66,3.92,3.92,0,0,0-3.92,3.91,4.07,4.07,0,0,0,3.92,4.11,3.93,3.93,0,0,0,3.54-2.28.64.64,0,0,1,.66-.37l.14,0a3.4,3.4,0,0,0,3.48-3.44A3.12,3.12,0,0,0,26,24a.66.66,0,0,1,.22-.66,3.19,3.19,0,0,0,.71-4.17A4.44,4.44,0,0,1,24.13,20.16Zm-8-7.5a.65.65,0,0,1,.92-.05,3.26,3.26,0,0,0,5.43-2.43.66.66,0,0,1,.66-.65.65.65,0,0,1,.65.65A4.57,4.57,0,0,1,20,14.68a2,2,0,0,0,1.86,1.37.65.65,0,0,1,0,1.3,3.26,3.26,0,0,1-3.2-2.65,4.46,4.46,0,0,1-2.45-1.12A.65.65,0,0,1,16.15,12.66Zm1.46,7.5A.66.66,0,0,1,17,19.5a.65.65,0,0,1,.65-.65,5.86,5.86,0,0,1,5.11,3,.65.65,0,0,1-.25.89.67.67,0,0,1-.89-.25A4.54,4.54,0,0,0,17.61,20.16Zm5.22,5.21a3.45,3.45,0,0,0-3.26,3.46.65.65,0,1,1-1.3,0,4.73,4.73,0,0,1,4.56-4.76.65.65,0,0,1,0,1.3Z" />
            <path class="cls-1"
              d="M11.74,8.22a2.64,2.64,0,0,1,1.31.35V3.46A3.46,3.46,0,0,0,9.79,0,3.31,3.31,0,0,0,7.13,1.55a3.9,3.9,0,0,1,2.16,1.1.65.65,0,0,1-.92.92A2.61,2.61,0,0,0,3.92,5.42v0a4.62,4.62,0,0,1,.65,0,4.73,4.73,0,0,1,4.56,4.76.65.65,0,0,1-1.3,0A3.45,3.45,0,0,0,4.57,6.72a3.44,3.44,0,0,0-3.26,3.46,3.18,3.18,0,0,0,.44,1.59.67.67,0,0,1-.22.88A3.23,3.23,0,0,0,0,15.4a3.43,3.43,0,0,0,3.27,3.45.65.65,0,0,1,.65.65.66.66,0,0,1-.65.66,4.44,4.44,0,0,1-2.79-1,3.19,3.19,0,0,0,.71,4.17.66.66,0,0,1,.22.66,3.4,3.4,0,0,0,3.38,4.2l.14,0a.64.64,0,0,1,.66.37,3.93,3.93,0,0,0,3.54,2.28,4.07,4.07,0,0,0,3.92-4.11,3.92,3.92,0,0,0-3.92-3.91.66.66,0,0,1-.65-.66.65.65,0,0,1,.65-.65,5.24,5.24,0,0,1,3.92,1.77V10.83a1.31,1.31,0,0,0-1.31-1.3.66.66,0,0,1-.65-.66A.65.65,0,0,1,11.74,8.22ZM9.13,28.83a.65.65,0,0,1-1.3,0,3.45,3.45,0,0,0-3.26-3.46.65.65,0,0,1,0-1.3A4.73,4.73,0,0,1,9.13,28.83Zm.66-8.67a4.54,4.54,0,0,0-4,2.31.67.67,0,0,1-.89.25.65.65,0,0,1-.25-.89,5.85,5.85,0,0,1,5.11-3,.65.65,0,0,1,.65.65A.66.66,0,0,1,9.79,20.16Zm1.79-7.5a.66.66,0,0,1-.05.92A4.49,4.49,0,0,1,9.08,14.7a3.27,3.27,0,0,1-3.21,2.65.65.65,0,1,1,0-1.3,2,2,0,0,0,1.87-1.37,4.56,4.56,0,0,1-3.82-4.5.65.65,0,0,1,1.3,0,3.27,3.27,0,0,0,5.44,2.43A.65.65,0,0,1,11.58,12.66Z" />
          </g>
        </g>
      </svg>

      <p class="menu__title item--title">Menu</p>
    </div>
    <!--  Sous parties  -->
      <div class="item item__one">
      <svg class="center" width="20" height="20" viewBox="0 0 20 20" fill="white" style="opacity: 1;"
        xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="9.5" stroke="white" />
      </svg>
      <svg class="nav--stroke" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="9.5" stroke="white" />
      </svg>
      <p class="intro__title item--title">Introduction</p>
    </div>
    <div class="item item__two">
      <svg class="center" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="9.5" stroke="white" />
      </svg>
      <svg class="nav--stroke" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="9.5" stroke="white" />
      </svg>
      <p class="one__title item--title">Le cerveau</p>
    </div>
    <div class="item item__three">
      <svg class="center" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="9.5" stroke="white" />
      </svg>
      <svg class="nav--stroke" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="9.5" stroke="white" />
      </svg>
      <p class="two__title item--title">Les émotions</p>
    </div>
    <div class="item item__four">
      <svg class="center" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="9.5" stroke="white" />
      </svg>
      <svg class="nav--stroke" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="9.5" stroke="white" />
      </svg>
      <p class="three__title item--title">Les réactions physiologiques</p>
    </div>
    <!--  Chapitre Suivant  -->
    <div class="next__chapter">
      <svg width="49" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="first--arrow"
          d="M24.0116 14.498L14.0435 25.7676C13.3063 26.5048 13.3063 27.7047 14.0435 28.442C14.7807 29.1792 15.9807 29.1792 16.7179 28.442L27.8484 15.8635C28.2245 15.4874 28.4013 14.9945 28.3975 14.5018C28.4013 14.0091 28.2245 13.5125 27.8484 13.1364L16.718 0.550344C15.9808 -0.183204 14.7808 -0.183203 14.0436 0.550344C13.3064 1.28389 13.3064 2.49132 14.0436 3.22475L24.0116 14.498Z"
          fill="white" />
        <path class="second--arrow"
          d="M10.5229 14.4994L0.562393 25.7689C-0.186185 26.5099 -0.186185 27.7099 0.554819 28.4471C1.28837 29.1843 2.4958 29.1843 3.22923 28.4471L14.3596 15.8648C14.7357 15.4887 14.9163 14.9959 14.9087 14.5032C14.9125 14.0105 14.7357 13.5139 14.3596 13.1377L3.23289 0.551684C2.49189 -0.181863 1.28813 -0.181863 0.558486 0.551685C-0.182518 1.28523 -0.182517 2.49266 0.558487 3.22609L10.5229 14.4994Z"
          fill="white" />
      </svg>
      <p class="next__title item--title">Chapitre suivant</p>
    </div>
    <!--  Fin de la NavBar  -->
  </nav>

  <div id="popup" class="infos__popup">
    <h2 class="popup__title">Indications :</h2>

    <div class="popup__content">
      <div class="popup__scroll">
        <img class="scrollGif" src="../../images/Scroll .gif" alt="Scroll">
        <p class="popup__explain">Scroller pour faire défiler le texte et naviguer entre les pages</p>
      </div>
      <div class="popup__hover">
        <img class="hoverIcon" src="../../images/hover.svg" alt="Hover">
        <p class="popup__explain">Survolez ces zones avec votre souris</p>
        </div>
      </div>
  

    </div>
    
  <p class="scroll">Scroll down</p>
        <img class="scroll__line" src="../../images/scrollLine.svg" alt="Scroll">


    </div>
    
</template>
<script>
import axios from 'axios'



export default {
    data() {
        return {
            chapterOnep: ' ',
            parts: ' ',
            test: false,
            sound: null
        }
    },


    watch: {
    '$route.params.id' (to, from) {
     
    
   console.log(this.$route.params.id)
     
      if(to == 1)
      {
         
          axios
        .get('http://127.0.0.1:8001/api/chapters')
        .then(response => (
            this.chapterOnep = response.data[1][1],
            this.parts = response.data[1][this.$route.params.id]
        ))
      } 
      
    }
  },

  
    async created () {
        axios
        .get('http://127.0.0.1:8001/api/chapters')
        .then(response => (this.chapterOnep = response.data[2][this.$route.params.id],
        this.sound = response.data[2][this.$route.params.id].image
                           
                          
      ))   
    },

  
}
</script>

        
<style scoped>

/* Reset CSS */

* {
  box-sizing: border-box;
}

body {
  font: 16px sans-serif;
  margin: 0;
  background-color: white;
  height: 100vh;
}

h1,
h2,
h3,
p,
ul {
  margin: 0;
  padding: 0;
  list-style: none;
  font-weight: 100;
}

a {
  text-decoration: none;
  color: black;
}
  @font-face {
        font-family: 'Gotham';
        src: url('../../fonts/Gotham-Bold.woff2') format('woff2'),
            url('../../fonts/Gotham-Bold.woff') format('woff');
        font-weight: bold;
        font-style: normal;
    }

    @font-face {
        font-family: 'Gotham';
        src: url('../../fonts/Gotham-Light.woff2') format('woff2'),
            url('../../fonts/Gotham-Light.woff') format('woff');
        font-weight: 300;
        font-style: normal;
    }

    @font-face {
        font-family: 'Gotham Book';
        src: url('../../fonts/Gotham-Book.woff2') format('woff2'),
            url('../../fonts/Gotham-Book.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Gotham Book';
        src: url('../../fonts/Gotham-BookItalic.woff2') format('woff2'),
            url('../../fonts/Gotham-BookItalic.woff') format('woff');
        font-weight: normal;
        font-style: italic;
    }

    @font-face {
        font-family: 'Gotham';
        src: url('../../fonts/Gotham-MediumItalic.woff2') format('woff2'),
            url('../../fonts/Gotham-MediumItalic.woff') format('woff');
        font-weight: 500;
        font-style: italic;
    }

    @font-face {
        font-family: 'Gotham';
        src: url('../../fonts/Gotham-LightItalic.woff2') format('woff2'),
            url('../../fonts/Gotham-LightItalic.woff') format('woff');
        font-weight: 300;
        font-style: italic;
    }

  body {
        background-color: #0F0F0F;
  }

  .speaker {
        width: 2%;
        position: absolute;
        top: 2%;
        left: 2%;
  }


  .brain {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: -1;
}

.filter {
  width: 100%;
  height: 100%;
  background-color: rgba(15, 15, 15, 0.4);
  z-index: 1;
}

.lines {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: -2;
}

.speaker {
  position: absolute;
  top: 2%;
  left: 2%;
  width: 2.5%;
}

.infos {
  position: absolute;
  top: 8%;
  left: 2%;
  width: 2.5%;
}

.infos__popup {
  display: none;
}

.clicked {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width: 45vw;
  height: 40vh;
  background-color: rgba(31, 31, 31, 0.7);
  border: 1px solid #92FCFE;
  border-radius: 10px;
}

.popup__title {
  font-family: 'Gotham', sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 24px;
  color: #FFFFFF;
  text-decoration: underline;
  text-align: center;
  transform: translateY(-100%);
}

.popup__content {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction: row;
  height: 50%;
}

.popup__scroll, .popup__hover {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction: column;
  height: 100%;
  width: 45%;
  font-family: 'Gotham Book';
  font-size: 20px;
  text-align: center;
  color: #FFFFFF;
}

.scrollGif {
  width: 30%;
}

.hoverIcon {
  width: 10%;
}

.title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  font-family: 'Gotham';
  font-style: normal;
  font-weight: 300;
  font-size: 64px;
  line-height: 61px;
  letter-spacing: 0.05em;
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: #92FCFE;
  text-shadow: 0px 0px 5px #FFFFFF;
  width: 75vw;
  z-index: 0;
}

.nav {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  width: 5%;
  background-color: rgba(196, 196, 196, 0.2);
}

.menu, .next__chapter {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10vh;
  width: 100%;
  border-bottom: 1px solid #FFFFFF;
}

.item {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20vh;
  width: 100%;
  border-bottom: 1px solid #FFFFFF;
  transition: all 0.5s;
  z-index: 3;
}

.item svg {
  position: absolute;
  transition: all 0.5s;
}

.center {
  fill: white;
  opacity: 0;
}

.div--hover {
  background: #4B2ABF;
}

.circle--hover {
  opacity: 1;
}

.stroke--hover {
  transform: scale(1.3);
}

.next__chapter {
  border-bottom: none;
}

.item--title {
  position: absolute;
  z-index: 2;
  color: white;
  font-size: 1.2em;
  width: 250px;
  opacity: 0;
  transition: all 0.5s;
  text-align: center;
}

.visible {
  font-family: 'Gotham', sans-serif;
  color: #92FCFE;
  font-size: 30px;
  transform: translateX(-10vw);
  opacity: 1;
}

/* .item--title.visible {
  display: block;
  font-family: 'Gotham', sans-serif;
  color: #92FCFE;
  font-size: 30px;
} */

.scroll {
  position: absolute;
  bottom: 5%;
  left: 50%;
  transform: translateX(-50%);
  font-family: 'Gotham';
  font-weight: bold;
  font-style: normal;
  font-size: 24px;
  color: #FFFFFF;
}

.scroll__line {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}

.menu svg {
  position: absolute;
  transition: all 0.5s;
}

.menu {
  transition: all 0.5s;
}

.basis {
  opacity: 1;
}

.hovered {
  opacity: 0;
  transform: translate(1px, 1px) scale(1.1)
}

.test {
  opacity: 1;
}

.hidden {
  opacity: 0;
}

.first--arrow {
  transition: all 0.5s;
}

.second--arrow {
  transition: all 0.5s;
}

.second {
  animation: second 2s infinite alternate ease-in-out;
}

.first {
  animation: first 2s infinite alternate ease-in-out;
}

@keyframes second {
  to {
    transform: translateX(20px);
  }
}

@keyframes first {
  to {
    transform: translateX(25px);
    opacity: 0;
  }
}


    



</style>






