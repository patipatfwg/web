function getCookie(t){for(var e=t+"=",r=document.cookie.split(";"),o=0;o<r.length;o++){for(var a=r[o];" "==a.charAt(0);)a=a.substring(1);if(0==a.indexOf(e))return a.substring(e.length,a.length)}return""}var userId="";if(""==getCookie("recmemberid")){var milliseconds=(new Date).getTime();document.cookie="recmemberid=MK-"+milliseconds+";expires=Thu, 31 Dec 2099 12:00:00 UTC;path=/"}userId=getCookie("recmemberid");var productId=$('meta[property="product:id"]').attr("content"),productCategoryLvl0=$('meta[property="product:cat_lv0"]').attr("content"),productCategoryLvl1=$('meta[property="product:cat_lv1"]').attr("content"),productCategoryLvl2=$('meta[property="product:cat_lv2"]').attr("content"),businessCategoryLvl0=$('meta[property="business:cat_lv0"]').attr("content"),businessCategoryLvl1=$('meta[property="business:cat_lv1"]').attr("content"),businessCategoryLvl2=$('meta[property="business:cat_lv2"]').attr("content"),productBrand=$('meta[property="product:brand"]').attr("content"),lastModified=$('meta[http-equiv="last-modified"]').attr("content");if(productId=void 0==productId?"":productId,productCategoryLvl0=void 0==productCategoryLvl0?"":productCategoryLvl0,productCategoryLvl1=void 0==productCategoryLvl1?"":productCategoryLvl1,productCategoryLvl2=void 0==productCategoryLvl2?"":productCategoryLvl2,businessCategoryLvl0=void 0==businessCategoryLvl0?"":businessCategoryLvl0,businessCategoryLvl1=void 0==businessCategoryLvl1?"":businessCategoryLvl1,businessCategoryLvl2=void 0==businessCategoryLvl2?"":businessCategoryLvl2,productBrand=void 0==productBrand?"":productBrand,lastModified=void 0==lastModified?"":lastModified.substring(0,lastModified.indexOf("+"))+"Z",""!=productId){var link_log="https://api.makroclick.local/api-search/v1/recommendation/writeLog/view.html";$.post(link_log,{personalizedId:userId,inventoryId:productId,catLv1:productCategoryLvl0,catLv2:productCategoryLvl1,catLv3:productCategoryLvl2,brand:productBrand}).done(function(t){})}