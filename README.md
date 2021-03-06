
## Description

ExpressionEngine plugin which calculates the number of days between dates.

### Installation

Copy the "days_between" folder to your /system/expressionengine/third_party folder.

### Usage

```
{exp:days_between:today}
```

Calculates the number of days between a date and today.

```
{exp:days_between:dates}
```

Calculates the number of days between two dates.

### Parameters

```
from_date=""
```

Unix timestamp or valid date/time format.

```
from_day=""
```

If passing day as individual argument (not used in conjunction with from_date).

```
from_month=""
```

If passing month as individual argument (not used in conjunction with from_date).

```
from_year=""
```

If passing year as individual argument (not used in conjunction with from_date).

```
to_date=""
```

Unix timestamp or valid date/time format

```
to_day=""
```

If passing day as individual argument (not used in conjunction with to_date).

```
to_month=""
```

If passing month as individual argument (not used in conjunction with to_date).

```
to_year=""
```

If passing year as individual argument (not used in conjunction with to_date).

```
invert=""
```

Inverts negative numbers when using future dates.

#### Examples

```
{exp:days_between:today from_date="1420088400"}
```

Returns the number of days between January 1, 2015 (epoch timestamp 1420088400) and today.

```
{exp:days_between:today from_date="January 1, 2015"}
```

Also returns the number of days between January 1, 2015 and today.


```
{exp:days_between:today from_year="2015" from_month="1" from_day="1"}
```

Also returns the number of days between January 1, 2015 and today.

```
{exp:days_between:dates from_date="January 1, 2015" to_date="1/4/2015"}
```

Returns 3.

```
{exp:days_between:dates from_date="yesterday" to_date="tomorrow"}
```

Returns 2.

```
{exp:days_between:dates from_year="2015" from_month="1" from_day="1" to_year="2015" to_month="1" to_day="2"}
```

Returns 1.