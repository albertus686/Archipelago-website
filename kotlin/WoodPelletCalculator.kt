fun calculateEnergy(weightKg: Double): Double {
    val energyPerKg = 4.8 // kWh per kg
    return weightKg * energyPerKg
}

fun main() {
    val tons = 2.5
    println("Estimated energy: ${calculateEnergy(tons * 1000)} kWh")
}