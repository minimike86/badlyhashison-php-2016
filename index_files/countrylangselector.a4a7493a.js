$(function(){var a=window.location.origin;a||(a=window.location.protocol+"//"+window.location.host),$("#locationChange").on("click",function(b){b.preventDefault(),$("#countryList").load(a+"/app/public/country-select.p"),$("div.selectNew.language").hide(),$("div.selectNew.location").toggle()}),$("#languageChange").on("click",function(b){b.preventDefault(),$("#languageList").load(a+"/app/public/language-select.p"),$("div.selectNew.location").hide(),$("div.selectNew.language").toggle()})});