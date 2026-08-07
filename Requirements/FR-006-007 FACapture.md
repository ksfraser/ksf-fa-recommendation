# FR-006-007 FACapture: FA Capture & Display of Recommendation Plan

**Related:** BR-006 Recommendation, FR-006-001..006

## Description
The FrontAccounting module lets an advisor open a client's Recommendation plan, run the `Ksfraser\Recommendation` engines, and display results inline.

## Primary actor
Advisor.

## Main flow
1. Advisor opens Recommendation Planning from the client menu. 2. System loads plan and runs engines. 3. Results persist against the client record.

## Postconditions
Recommendation plan results visible and stored for the client.
