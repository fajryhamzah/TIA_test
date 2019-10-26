SELECT DATE_FORMAT(date, "%D %a %b %Y") days FROM assessments WHERE date BETWEEN "2011-01-01" AND "2011-06-30" AND date not in (SELECT date from assessments WHERE score < 0) GROUP BY date order by date ASC;