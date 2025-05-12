def format_duration(seconds: int) -> str:
    if seconds == 0:
        return "now"

    units = [
        ("year", 365 * 24 * 60 * 60),
        ("day", 24 * 60 * 60),
        ("hour", 60 * 60),
        ("minute", 60),
        ("second", 1),
    ]

    parts = []
    for name, unit_seconds in units:
        count, seconds = divmod(seconds, unit_seconds)
        if count:
            parts.append(f"{count} {name}" + ("s" if count > 1 else ""))

    if len(parts) == 1:
        return parts[0]
    else:
        return ", ".join(parts[:-1]) + " and " + parts[-1]

# Original kata: https://www.codewars.com/kata/52742f58faf5485cae000b9a
# My solution: https://www.codewars.com/kata/reviews/550b304659513854f3000f52/groups/6821a3461fe3b0263fc12bd1
