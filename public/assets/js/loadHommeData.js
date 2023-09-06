import {
    swipe
  } from '/assets/js/swiperBanner.js';
  var bannerHomme = document.querySelector('._bannerHomme');
  var recent = document.querySelector('._recent');
  var categoryCulture = document.querySelector('._category_culture');
  var categoryBusiness = document.querySelector('._category_business');
  var categoryLifeStyle = document.querySelector('._category_lifeStyle');
  
  async function loadHomeData(){
    var trending = document.querySelector('._trending');

    // const responses = await Promise.all([
    //     await fetch('/banner/home', {method:'get'}),
    //     await fetch('/trendings/home', {method:'get'}),
    //     await fetch('/recents/home', {method:'get'}),
    //     await fetch('/category/culture', {method:'get'}),
    //     await fetch('/category/business', {method:'get'}),
    //     await fetch('/category/lifeStyle', {method:'get'})
    // ]);

    // const bannerHtml = await responses[0].text();
    // const trendingHtml = await responses[1].text();
    // const recentHtml = await responses[2].text();
    // const categoryCultureHtml = await responses[3].text();
    // const categoryBusinessHtml = await responses[4].text();
    // const categoryLifeStyleHtml = await responses[5].text();


    // bannerHomme.innerHTML= bannerHtml;
    // recent.innerHTML= recentHtml;
    // categoryCulture.innerHTML= categoryCultureHtml;
    // categoryBusiness.innerHTML= categoryBusinessHtml;
    // categoryLifeStyle.innerHTML= categoryLifeStyleHtml;

    // var trending = document.querySelector('._trending');
    // trending.innerHTML= trendingHtml;
    
      // Load Banner Home

    const dataBanner = await fetch ('/banner/home', {method:'get'});
    const bannerHtml = await dataBanner.text();
    bannerHomme.innerHTML = bannerHtml;

    swipe('.sliderFeaturedPosts');

      // load Recent
      
      const dataRecent = await fetch ('/recents/home', {method:'get'});
      const recentHtml = await dataRecent.text();
      recent.innerHTML = recentHtml;

      // load Trending

    var trending = document.querySelector('._trending');
    const dataTrending = await fetch ('/trendings/home', {method:'get'});
    const trendingHtml = await dataTrending.text();
    trending.innerHTML = trendingHtml;

      // Load Categry Culture

    const dataCategoryCulture = await fetch ('/category/culture', {method:'get'});
    const categoryCultureHtml = await dataCategoryCulture.text();
    categoryCulture.innerHTML = categoryCultureHtml;

     // Load Categry Business
      
     const dataCategoryBusiness = await fetch ('/category/business', {method:'get'});
     const categoryBusinessHtml = await dataCategoryBusiness.text();
     categoryBusiness.innerHTML = categoryBusinessHtml;

     // Load Categry Life Style
      
     const dataCategoryLifeStyle = await fetch ('/category/lifeStyle', {method:'get'});
     const categoryLifeStyleHtml = await dataCategoryLifeStyle.text();
     categoryLifeStyle.innerHTML = categoryLifeStyleHtml;
 

  }
  loadHomeData();