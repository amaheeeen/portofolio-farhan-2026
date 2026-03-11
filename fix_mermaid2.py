import re

content = open('case-study-kalcer.html', encoding='utf-8').read()

# ---- Find Flow B mermaid block using regex (handles both LF and CRLF) --------
pattern_b = re.compile(
    r'(<div class="mermaid">)\s*\nflowchart TD\s*\n\s*BA\(\[.*?style BW fill:[^\n]+\n\s*</div>',
    re.DOTALL
)

new_flow_b = '''<div class="mermaid">
flowchart TD
    BA([Business Owner accesses Kalcer.ID Business Portal]) --> BB[Login screen<br>Email + password OR Google Business account]
    BB --> BC{Account verified?}
    BC -- Pending --> BD[Verification pending screen<br>Your venue is under review 24 to 48h<br>Email notification queued]
    BC -- Verified --> BE[Business Dashboard loads<br>KPI cards: Views Check-ins Reviews Saves<br>Notification bell with alerts]

    BE --> BF{Notifications present?}
    BF -- Yes --> BG[Owner reads notification tray<br>New reviews to respond to<br>Profile completion prompts System alerts]
    BG --> BH[Owner taps review notification<br>Review Response Panel<br>Shows star rating and user comment]
    BH --> BI[Owner types public response<br>Thank you for visiting<br>Submit response appears below review]
    BF -- None --> BJ

    BI --> BJ[Owner navigates to My Venue management section]
    BJ --> BK[Venue Editor loads<br>Current details shown in editable form<br>Last updated timestamp visible]

    BK --> BL{What to update?}
    BL -- Operational Hours --> BM[Edit hours table<br>Day-by-day toggle On/Off<br>From/To time picker · Holiday exception dates]
    BM --> BN[Preview shows how it appears to end-users<br>Opens 10:00 AM<br>Save Hours update live on platform]

    BL -- Images --> BO[Image Manager<br>Drag-and-drop upload zone<br>Existing images in grid with delete X<br>Set cover photo by dragging to first slot]
    BO --> BP[Image compression auto-runs<br>Alt-text field optional<br>Max 10 images per venue]
    BP --> BQ[Save New images live immediately<br>Old cover replaced with fade transition]

    BL -- Venue Info --> BR[Edit form<br>Venue name Description Category<br>Address Social links Vibe tags]
    BR --> BS{Changes pass validation?}
    BS -- Missing required fields --> BT[Inline errors highlighted in red<br>Scroll to first error auto<br>No data loss on validation fail]
    BS -- Valid --> BU[Save draft OR Publish immediately]
    BU --> BV[Change log entry created<br>Admin moderation for sensitive fields<br>Minor edits go live instantly]

    BN --> BW
    BQ --> BW
    BV --> BW[Venue page updated<br>Success toast: Your venue is live<br>Dashboard analytics refresh]
    BW --> BX([Session complete<br>Changes reflected on explore feed<br>Owner can preview public page])

    style BA fill:#0E8A7A,color:#fff,stroke:none
    style BX fill:#2D9B6F,color:#fff,stroke:none
    style BC fill:#F7F3EE,color:#7A6B5D,stroke:#0E8A7A
    style BF fill:#F7F3EE,color:#7A6B5D,stroke:#F5A623
    style BL fill:#F7F3EE,color:#7A6B5D,stroke:#0E8A7A
    style BS fill:#F7F3EE,color:#7A6B5D,stroke:#2D9B6F
    style BD fill:#fff7ed,color:#9a3412,stroke:#F5A623
    style BT fill:#fef2f2,color:#991b1b,stroke:#DC3545
    style BN fill:#f0fdf4,color:#166534,stroke:#2D9B6F
    style BW fill:#f0fdf4,color:#166534,stroke:#2D9B6F
    </div>'''

match = pattern_b.search(content)
if match:
    content = content[:match.start()] + new_flow_b + content[match.end():]
    print("Flow B found and replaced!")
else:
    # fallback: look for the second <div class="mermaid"> and replace to </div>
    starts = [m.start() for m in re.finditer(r'<div class="mermaid">', content)]
    print(f"Found {len(starts)} mermaid blocks at positions: {starts}")
    if len(starts) >= 2:
        s = starts[1]
        e = content.find('    </div>', s) + len('    </div>')
        content = content[:s] + new_flow_b + content[e:]
        print("Flow B replaced via fallback!")
    else:
        print("ERROR: Could not find Flow B!")

open('case-study-kalcer.html', 'w', encoding='utf-8').write(content)
print("Done.")
