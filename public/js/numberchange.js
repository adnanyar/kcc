//#region - start of - number counter animation
const counterAnim = (qSelector, start = 0, end, duration = 1000) => {
    const target = document.querySelector(qSelector);
    let startTimestamp = null;
    const step = (timestamp) => {
     if (!startTimestamp) startTimestamp = timestamp;
     const progress = Math.min((timestamp - startTimestamp) / duration, 1);
     target.innerText = Math.floor(progress * (end - start) + start);
     if (progress < 1) {
      window.requestAnimationFrame(step);
     }
    };
    window.requestAnimationFrame(step);
   };
   //#endregion - end of - number counter animation
   
   document.addEventListener("DOMContentLoaded", () => {
    counterAnim("#count1", 5, 500, 80000);
    counterAnim("#count2", 10, 1093, 10000);
    counterAnim("#count3", 10, 1802, 120000);
    counterAnim("#count4", 10, 2332, 140000);
    
   });