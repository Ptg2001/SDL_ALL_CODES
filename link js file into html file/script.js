alert("JS file linked successfully!");
const averageHumanLifespanYears = 60; 
const weeksInYear = 52; 

const averageWeeksInLifetime = averageHumanLifespanYears * weeksInYear;


console.log("Average number of weeks in human lifetime:", averageWeeksInLifetime);
const currentHour = new Date().getHours();

function getTimeOfDay(hour) {
  if (hour >= 5 && hour < 12) {
    return "morning";
  } else if (hour >= 12 && hour < 18) {
    return "afternoon";
  } else {
    return "night";
  }
}

const timeOfDay = getTimeOfDay(currentHour);
console.log("Time of the day:", timeOfDay);
console.log("Hour of the day:", currentHour);
