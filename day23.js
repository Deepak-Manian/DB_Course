// ============================================================
//  DAY 23 – 19.02.2026
//  Topics: 1) Spread  2) Rest
//  Theme : Anime 🎌
// ============================================================


// ============================================================
//  SECTION 1 – SPREAD OPERATOR  ( ... )
//  Used to expand / unpack an iterable (array, string, …)
// ============================================================

// ── 1a) JOIN two arrays ──────────────────────────────────────
const shounen = ["Naruto", "Bleach", "My Hero Academia"];
const isekai = ["Re:Zero", "Sword Art Online", "Overlord"];

const allAnime = [...shounen, ...isekai];
console.log("🎌 Joined anime list:", allAnime);


// ── 1b) ADD elements to an array ────────────────────────────
// Add new titles at the beginning and at the end
const withNew = ["Attack on Titan", ...allAnime, "Demon Slayer"];
console.log("\n➕ After adding new titles:", withNew);


// ── 1c) UPDATE (replace) an element ─────────────────────────
// Replace the element at index 2 with a new title
const indexToUpdate = 2;
const updated = [
    ...allAnime.slice(0, indexToUpdate),   // elements before
    "One Punch Man",                        // replacement
    ...allAnime.slice(indexToUpdate + 1)   // elements after
];
console.log(`\n✏️  Updated index ${indexToUpdate} →`, updated);


// ── 1d) COPY an array (shallow copy) ────────────────────────
// Spread creates a NEW array – mutating the copy won't affect the original
const originalWatchList = ["Fullmetal Alchemist", "Cowboy Bebop", "Death Note"];
const copyWatchList = [...originalWatchList];

copyWatchList.push("Hunter x Hunter");   // only changes the copy

console.log("\n📋 Original watch-list:", originalWatchList);
console.log("📋 Copy watch-list    :", copyWatchList);


// ── Bonus: Spread with strings ───────────────────────────────
const title = "NARUTO";
const letters = [...title];
console.log("\n🔤 Spread a string into chars:", letters);


// ── Bonus: Spread in function calls ─────────────────────────
const powerLevels = [9001, 8500, 7200, 9300, 6800];
console.log("\n💥 Highest power level:", Math.max(...powerLevels));
console.log("💥 Lowest  power level:", Math.min(...powerLevels));


// ============================================================
//  SECTION 2 – REST PARAMETERS  ( ... )
//  Collects any number of arguments into an array inside a fn.
// ============================================================

// ── 2a) Subtraction function using Rest ─────────────────────
// Subtracts all remaining numbers from the first number
function subtractAll(first, ...rest) {
    console.log(`\n➖ Starting value : ${first}`);
    console.log(`   Values to subtract : [${rest}]`);
    const result = rest.reduce((acc, num) => acc - num, first);
    console.log(`   Result : ${result}`);
    return result;
}

subtractAll(100, 10, 20, 5);       // 100 - 10 - 20 - 5 = 65
subtractAll(9001, 1000, 500, 200); // Goku's power level math 😄


// ── 2b) Rest combined with other (named) parameters ─────────
// Real-world example: an anime character summary logger
function logCharacter(name, anime, ...abilities) {
    console.log(`\n🧑‍🦱 Character : ${name}`);
    console.log(`   Anime     : ${anime}`);
    if (abilities.length > 0) {
        console.log(`   Abilities : ${abilities.join(" | ")}`);
    } else {
        console.log("   Abilities : Unknown");
    }
}

logCharacter("Naruto Uzumaki", "Naruto", "Shadow Clone Jutsu", "Rasengan", "Sage Mode", "Kurama Mode");
logCharacter("Levi Ackerman", "Attack on Titan", "3D Maneuver Gear", "Blade Master", "Titan Slayer");
logCharacter("Saitama", "One Punch Man", "One Punch");
logCharacter("Mob", "Mob Psycho 100");  // no abilities passed → rest = []


// ── 2c) Rest to sum variable arguments ──────────────────────
function sumPowerLevels(label, ...levels) {
    const total = levels.reduce((acc, lvl) => acc + lvl, 0);
    console.log(`\n⚡ [${label}] Total combined power: ${total}`);
    return total;
}

sumPowerLevels("Z-Fighters", 9001, 8000, 7500, 9200);
sumPowerLevels("Akatsuki", 8800, 9100, 7900, 8200, 8600);
