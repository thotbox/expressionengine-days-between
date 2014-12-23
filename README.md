
## Description

ExpressionEngine plugin which calculates number of days between dates.

### Installation

Copy the "days_between" folder to your /system/expressionengine/third_party folder.

### Usage

Use {exp:days_between:today from_year="" from_month="" from_day=""} to calculate number of days from today.

Use {exp:days_between:dates from_year="" from_month="" from_day="" to_year="" to_month="" to_day=""} to calculate number of days between dates.

When using future dates, add invert="yes" to invert negative numbers.

#### Examples

```
{exp:days_between:dates from_year="2014" from_month="12" from_day="1" to_year="2014" to_month="12" to_day="25"}
```

This would return 24.

```
{exp:days_between:today from_year="2014" from_month="12" from_day="1"}
```

If today were December 25th 2014, this would also return 24.