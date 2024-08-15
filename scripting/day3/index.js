const evenOddCalculator = (n) => {
  n % 2 == 0 ? console.log("Even") : console.log("Odd");
};

evenOddCalculator(11);

const elseIfExample = (a, b) => {
  if (a > b) {
    console.log("A is greater");
  } else if (a < b) {
    console.log("B is greater");
  } else {
    console.log("A and B are equal");
  }
};

elseIfExample(5, 3);

const switchCaseExample = (day) => {
  switch (day) {
    case "Monday":
      console.log("Today is Monday");
      break;
    case "Tuesday":
      console.log("Today is Tuesday");
      break;
    case "Wednesday":
      console.log("Today is Wednesday");
      break;
    case "Thursday":
      console.log("Today is Thursday");
      break;
    case "Friday":
      console.log("Today is Friday");
      break;
    case "Saturday":
      console.log("Today is Saturday");
      break;
    case "Sunday":
      console.log("Today is Sunday");
      break;
    default:
      console.log("Invalid day");
  }
};

switchCaseExample("Monday");
