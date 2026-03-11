import re

content = open('case-study-kalcer.html', encoding='utf-8').read()

# Use regex to find and replace the FIRST mermaid block (Flow A) completely
# It starts right after the Flow A panel header and the <div class="mermaid">
pattern_a = re.compile(
    r'(<div class="mermaid">)\s*\nflowchart TD\s*\n\s*A\(\[.*?style Q fill:[^\n]+\n\s*</div>',
    re.DOTALL
)

new_flow_a = '''<div class="mermaid">
flowchart TD
    A([User opens Kalcer.ID]) --> B[Explore Feed loads<br>Personalised cards: trending nearby<br>Location permission requested]
    B --> C{Location permitted?}
    C -- Yes --> D[Feed ranked by proximity and trending score<br>Geolocation-aware cards]
    C -- No --> E[Feed ranked by general trending<br>Prompt to enable location later]
    D --> F
    E --> F[User browses Hangout Cards<br>Image - Name - Verified badge - Open/Closed - Rating]

    F --> G{Interaction type?}
    G -- Search intent --> H[Tap search bar<br>Type keyword or category<br>Instant live results filter]
    G -- Filter intent --> I[Tap filter chips<br>Category / Open Now / District / Vibe<br>Results update without page reload]
    G -- Curious tap --> J

    H --> J[Hangout Detail Page<br>Hero image full-bleed<br>Name + Verified + Category]
    I --> J

    J --> K[User reads operational hours<br>Open/Closed status badge<br>Schedule table if tapped]
    K --> L[User scrolls to Reviews section<br>Reads community ratings<br>Photo reviews visible]
    L --> M{User intent?}

    M -- Save for later --> N[Tap Bookmark icon<br>Heart animation plays<br>Added to Wishlist instantly]
    N --> O[Toast: Saved to your Wishlist<br>No account? Soft prompt to sign up<br>Guest can bookmark with local storage]
    O --> P{User logged in?}
    P -- No nudge --> Q[Non-intrusive banner<br>Sign up to keep your saves forever<br>Dismissable not blocking]
    P -- Yes --> R

    M -- Check in --> S{User logged in?}
    S -- No --> T[Auth wall with context<br>Log in to check in at this spot<br>Sign up or continue as guest]
    T --> U[Auth Flow<br>Email / Google / Phone OTP<br>Fast under 3 screens]
    U --> S
    S -- Yes --> V[Tap Check In button<br>Confirmation sheet slides up<br>Venue name + timestamp + optional photo]
    V --> W[Check-in confirmed<br>Badge added to user profile<br>Venue check-in count increments]

    W --> R
    M -- Leave a review --> X{User checked in or visited?}
    X -- Yes --> Y[Review Composer<br>Star rating 1 to 5<br>Text field: What made this spot special?<br>Photo upload optional]
    X -- No prompt --> Z[Soft gate: Have you visited this place?<br>Two options: I have been here or Just sharing thoughts<br>Both paths allowed]
    Z --> Y
    Y --> AA[Submit review<br>Moderation flag check<br>Review appears after brief delay]
    AA --> AB([Review live and Profile updated<br>XP badge earned if gamification enabled])

    R --> F

    style A fill:#E8552A,color:#fff,stroke:none
    style AB fill:#2D9B6F,color:#fff,stroke:none
    style C fill:#F7F3EE,color:#7A6B5D,stroke:#E8552A
    style G fill:#F7F3EE,color:#7A6B5D,stroke:#E8552A
    style M fill:#F7F3EE,color:#7A6B5D,stroke:#F5A623
    style P fill:#F7F3EE,color:#7A6B5D,stroke:#F5A623
    style S fill:#F7F3EE,color:#7A6B5D,stroke:#2D9B6F
    style X fill:#F7F3EE,color:#7A6B5D,stroke:#2D9B6F
    style N fill:#f0fdf4,color:#166534,stroke:#2D9B6F
    style W fill:#f0fdf4,color:#166534,stroke:#2D9B6F
    style T fill:#fff7ed,color:#9a3412,stroke:#F5A623
    style Q fill:#fff7ed,color:#9a3412,stroke:#F5A623
    </div>'''

match = pattern_a.search(content)
if match:
    content = content[:match.start()] + new_flow_a + content[match.end():]
    print("Flow A found and replaced via regex!")
else:
    # Fallback: find first <div class="mermaid"> block
    starts = [m.start() for m in re.finditer(r'<div class="mermaid">', content)]
    print(f"Found {len(starts)} mermaid blocks at positions: {starts}")
    if len(starts) >= 1:
        s = starts[0]
        e = content.find('    </div>', s) + len('    </div>')
        content = content[:s] + new_flow_a + content[e:]
        print("Flow A replaced via fallback!")
    else:
        print("ERROR: could not find Flow A!")

open('case-study-kalcer.html', 'w', encoding='utf-8').write(content)
print("Done.")
